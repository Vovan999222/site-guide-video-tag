// lang.js - Полная рабочая версия

document.addEventListener('DOMContentLoaded', function() {
    const languageSelect = document.getElementById('languageSelect');
    const htmlElement = document.documentElement;
    
    // Инициализация при загрузке
    initializeLanguage();

    // Обработчик изменения языка
    if(languageSelect) {
        languageSelect.addEventListener('change', function() {
            const newLang = this.value;
            setLanguage(newLang);
        });
    }

    function initializeLanguage() {
        // Восстановление языка из cookie
        const savedLang = getCookie('user_lang');
        const defaultLang = savedLang || currentLang;
        
        // Установка начального языка
        if(savedLang && savedLang !== currentLang) {
            updateContent(savedLang);
        }
        updateHistoryState(defaultLang);
    }

    function setLanguage(lang) {
        // Сохраняем в cookie на 30 дней
        document.cookie = `user_lang=${lang}; path=/; max-age=${2592000}; SameSite=Lax`;
        
        // Обновляем контент и метаданные
        updateContent(lang);
        updateMetaTags(lang);
        updateHistoryState(lang);
        
        // Переинициализация плеера
        reinitializePlayer();
    }

    function updateContent(lang) {
        const content = translations[lang] || translations.uk;
        
        // Основные элементы
        document.title = content.title;
        htmlElement.lang = lang;
        
        // Динамическое обновление контента
        updateTranslatableElements(content);
        updateSpecialContent(content);
    }

    function updateTranslatableElements(content) {
        // Обновляем все элементы с data-translate
        document.querySelectorAll('[data-translate]').forEach(el => {
            const key = el.dataset.translate;
            const value = getNestedValue(content, key);
            
            if(el.tagName === 'INPUT') {
                el.placeholder = value || '';
            } else if(el.tagName === 'IMG') {
                el.alt = value || '';
            } else {
                el.textContent = value || '';
            }
        });

        // Обновляем h1 отдельно для гарантии
        const h1Element = document.querySelector('h1[data-translate="h1"]');
        if(h1Element && content.h1) {
            h1Element.textContent = content.h1;
        }
    }

    function updateSpecialContent(content) {
        // Обработка HTML-контента
        document.querySelectorAll('[data-translate-html]').forEach(el => {
            const key = el.dataset.translateHtml;
            el.innerHTML = getNestedValue(content, key) || '';
        });
    }

    function updateMetaTags(lang) {
        // Обновление Open Graph
        const ogTitle = document.querySelector('meta[property="og:title"]');
        if(ogTitle) ogTitle.content = translations[lang].title;

        // Обновление canonical ссылки
        const canonicalLink = document.querySelector('link[rel="canonical"]');
        if(canonicalLink) {
            canonicalLink.href = generateCanonicalUrl(lang);
        }
    }

    function reinitializePlayer() {
        // Перезагрузка видео-плеера
        if(typeof player !== 'undefined') {
            player.api('destroy');
            player = new Playerjs({id:"player", file:"[720p]video/720/video-720.m3u8,[1080p]video/1080/video-1080.m3u8"});
        }
    }

    function getNestedValue(obj, path) {
        return path.split('.').reduce((o,p) => o && o[p], obj);
    }

    function generateCanonicalUrl(lang) {
        return `${window.location.origin}${window.location.pathname}?lang=${lang}`;
    }

    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        return parts.length === 2 ? parts.pop().split(';').shift() : null;
    }

    function updateHistoryState(lang) {
        const url = new URL(window.location);
        url.searchParams.set('lang', lang);
        window.history.replaceState({}, '', url);
    }
});

// Валидация переводов при разработке
if(process.env.NODE_ENV === 'development') {
    console.log('Available translations:', Object.keys(translations));
    console.log('Current language content:', translations[currentLang]);
}