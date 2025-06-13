# Simple Calculator Block for Moodle

This Moodle block plugin provides a simple calculator for use within course pages and dashboards.

## Features

- Fully client-side calculator
- Responsive layout using native HTML/CSS
- No data storage or tracking (GDPR-compliant)
- Lightweight and easy to use

## Installation

1. Copy the folder `simplecalculator` into your Moodle `/blocks/` directory.
2. Rename it to `simplecalculator` if necessary.
3. Visit the *Site administration > Notifications* page to complete the installation.

## Compatibility

- Moodle 4.5 – 5.0

## Development

This plugin uses an AMD module for its JavaScript.

To build the JS (after changes):

```bash
grunt amd
```

## Privacy

This plugin does **not** store any personal user data.

## License

[GNU GPL v3](http://www.gnu.org/licenses/gpl-3.0.html)

---

© 2025 Your Name. Moodle plugin contribution.
