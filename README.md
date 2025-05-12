
# Custom Blog Event Gallery Plugin

A customizable WordPress plugin that displays a unique event gallery on your site, showcasing posts from the "corporate-meetings" category. The gallery has a featured event section, as well as side events that can be customized via shortcodes.

## Features 🚀
- Displays a grid of events with featured images only (no titles or text).
- Displays a **highlighted event** on the left side.
- Shows two **side events** on the right side.
- Shortcodes to control the content displayed (e.g., highlighted event, side events).
- Responsive layout with a clean and modern design.

## Installation ⚙️

1. Download the plugin ZIP or clone this repository.
2. Upload the `custom-blog-event-gallery` folder into your `/wp-content/plugins/` directory.
3. Activate the plugin via the "Plugins" menu in WordPress.

## Shortcodes 📋

### `[events_home_grid]`
Displays the main event grid with:
- A **highlighted event** on the left.
- Two **side events** on the right.

Example usage:
```php
[events_home_grid]
```

### `[highlighted_event]`
Displays the **highlighted event** (first post from the "corporate-meetings" category). The event is displayed with its featured image.

Example usage:
```php
[highlighted_event]
```

### `[side_event_1]`
Displays the **first side event** (second post from the "corporate-meetings" category).

Example usage:
```php
[side_event_1]
```

### `[side_event_2]`
Displays the **second side event** (third post from the "corporate-meetings" category).

Example usage:
```php
[side_event_2]
```

## Styling 🖌️

By default, the gallery has a responsive layout with the following CSS classes:

- `.events-grid` – The grid container for all events.
- `.left-column` – The column for the **highlighted event**.
- `.right-column` – The column for the **side events**.
- `.event-box` – A container for each event, displaying the featured image as the background.
- `.event-overlay` – The overlay containing the event title and date.

You can customize the layout by overriding the provided CSS in your theme or using custom styles.

## Requirements 📋
- WordPress 5.8+
- PHP 7.4+

## Screenshots 📸
| Feature | Screenshot |
|:---|:---|
| Event Grid with Highlighted and Side Events | ![Event Grid](assets/screenshots/event-grid.png) |

## Roadmap 🛤️
- [ ] Add filtering options for categories.
- [ ] Add pagination for events.
- [ ] Add support for custom post types.

## Contributing 🤝
Pull requests are welcome! For major changes, please open an issue first to discuss what you'd like to change.

## License 📜
This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author ✒️
Developed by [Silvio](hhttps://silvio-brandao.github.io/somativa1-devops/).
