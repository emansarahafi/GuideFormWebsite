# GuideForm Website

![GuideForm](https://github.com/emansarahafi/GuideFormWebsite/assets/85173630/58e33311-258c-4cbc-ac49-614ff06b3a6f)

A website for GuideForm, a Python application for surveying purposes.

## About

Tashfeen Engineering Solutions is a geotechnical, civil engineering, and software development company established in 2020. This website serves as the web interface for the GuideForm application, which facilitates surveys for engineering research purposes.

## Project Structure

```text
GuideFormWebsite/
├── assets/
│   └── images/
│       ├── GuideForm.png
│       ├── GuideForm.pdf
│       └── GuideForm.ico
├── css/
│   ├── main.css
│   ├── survey.css
│   └── confirmation.css
├── js/
│   ├── main.js
│   ├── survey.js
│   └── geolocation.js
├── docs/
│   └── code/
│       ├── appcode.html
│       ├── functionscode.html
│       ├── graphscode.html
│       ├── librariescode.html
│       ├── telegramcode.html
│       └── windowcode.html
├── index.html
├── appsurvey.html
├── appsurvey.php
├── appconfirmation.html
├── .gitignore
└── README.md
```

### File Descriptions

**Main Pages:**

- `index.html` - Main landing page with company info and navigation
- `appsurvey.html` - Interactive survey form for engineering students
- `appsurvey.php` - Server-side form processor with Telegram API integration
- `appconfirmation.html` - Success confirmation page after form submission

**Documentation (docs/code/):**

- `appcode.html` - Complete application code documentation
- `librariescode.html` - Required libraries documentation
- `windowcode.html` - Window design code
- `telegramcode.html` - Telegram integration code
- `graphscode.html` - Data visualization/graphing code
- `functionscode.html` - Button functions and positioning code

**Assets:**

- `assets/images/` - Images, PDF files, and favicon
- `css/` - External stylesheets (main.css, survey.css, confirmation.css)
- `js/` - External JavaScript files (main.js, survey.js, geolocation.js)

## Usage

1. Open `index.html` in a web browser to access the main page
2. Click "Access the survey" to fill out the engineering student survey
3. Form submissions are processed via PHP and sent to Telegram
4. Use the dropdown menus to view various code documentation

## Features

- 📱 Responsive design with clean UI
- 🎨 Separated CSS for maintainability
- 📝 Form validation with jQuery
- 🌍 IP geolocation tracking
- 🤖 Telegram bot integration for form submissions
- 🖼️ Custom favicon and branding

## Technologies Used

- HTML5
- CSS3
- JavaScript (with jQuery for form validation)
- PHP
- Python (backend application)

## Company

Powered by [Tashfeen Engineering Solutions](https://tashfeen.tech/) © 2022
