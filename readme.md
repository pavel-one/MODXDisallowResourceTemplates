## Описание
Это микрокомпонент который позволяет запретить определенной группе пользователей редактировать документы с определенным шаблоном или рядом шаблонов. Также компонент скрывает документы с этими шаблонами из дерева ресурсов

## Установка
Создаем две настройки (можно использовать clientConfig для этого)

- **allow_to_update** - настройка где через запятую указываются запрещенные шаблоны
- **premisson_group** - настройка, в который указывается название группы пользователей для которых будет запрещено редактировать и видеть ресурсы с шаблоном  allow_to_update
- Создаем новый плагин под любым названием, назначаем ему событие **OnManagerPageBeforeRender** и сохраняем
- Заменяем стандартный процессор **getNodes**
