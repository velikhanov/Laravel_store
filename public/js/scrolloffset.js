/*Scroll return*/
//let cords = ['scrollX','scrollY'];
// Перед закрытием записываем в локалсторадж window.scrollX и window.scrollY как scrollX и scrollY
//window.addEventListener('unload', e => cords.forEach(cord => localStorage[cord] = window[cord]));
// Прокручиваем страницу к scrollX и scrollY из localStorage (либо 0,0 если там еще ничего нет)
//window.scroll(...cords.map(cord => localStorage[cord]));
let cords = ['scrollX','scrollY'];
// сохраняем позицию скролла в localStorage
//window.addEventListener('click', e => cords.forEach(cord => localStorage[cord] = window[cord]));
document.querySelectorAll('.scrollOffset').forEach(el => {
    el.addEventListener('click', () => {
        cords.forEach(cord => localStorage[cord] = window[cord]);
    });
});
// вешаем событие на загрузку (ресурсов) страницы
window.addEventListener('load', e => {
    // если в localStorage имеются данные
    if (localStorage[cords[0]]) {
        // скроллим к сохраненным координатам
        window.scroll(...cords.map(cord => localStorage[cord]));
        // удаляем данные с localStorage
        cords.forEach(cord => localStorage.removeItem(cord));
    }
});
