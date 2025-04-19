# Symfony Portfolio App

A personal portfolio website built with symfony to showcase a web development skills, projects, and contact information. A simple portfolio project.

---

## Project Setup

### 1. Create the Project

To create this project, run:

```bash
symfony new [projectName] --webapp
```

This will generate a new Symfony app with the webapp skeleton in your desired directory.

---

## Steps Completed


### 2. Scaffold Controllers and Pages
- Created `PageController` for Home (`/`), About (`/about`), and Contact (`/contact`).
- Created `ProjectController` for Projects (`/projects`).

### 3. Add Twig Templates
- Each page has its own Twig template in `templates/page/` or `templates/project/`.
- All templates extend `base.html.twig` for a consistent layout.

### 4. Add Navigation Bar
- Simple navigation bar added to `base.html.twig` for easy access to all pages.

### 5. Add Sample Content
- Each page now contains sample content (bio, skills, projects, contact info).

### 6. Contact Form
- The Contact page (`/contact`) now features a working form (Name, Email, Message).
- Submissions are validated and a confirmation message is shown on success.
- (u can extend this to send emails or save messages to a database.)

---

## How the Contact Form Works

1. **Form Class:** `src/Form/ContactType.php` defines the fields.
2. **Controller:** Handles displaying and processing the form.
3. **Template:** Renders the form and shows a thank you message after submission.

To try it:
- Go to `/contact`, fill out the form, and submit.
- You’ll see a success message if all fields are valid.

---

## Possible Next Steps to enhance the project and deepen the understanding
- Make the Projects page dynamic.
- Add email sending or message storage for the contact form.
- Improve styling with CSS or a framework.
- Deploy my portfolio online.

---

## Development

To start the local development server:

```bash
cd [symfony_app]
symfony serve
```

Visit your site at [http://127.0.0.1:8000](http://127.0.0.1:8000)

---

## License
MIT
