# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Statamic CMS project called "Democratic Learning Tracker" - a student activity tracking system for democratic schools built on the Cool Writings starter kit. It's a Laravel-based flat-file CMS focused on documenting, tracking, and exploring student learning activities, teacher involvement, and educational experiences.

## Architecture

- **Framework**: Statamic 5.x (Laravel 11 based)
- **Frontend**: TailwindCSS + Alpine.js + Vite build system
- **Content**: Flat-file based with Markdown frontmatter
- **PHP Version**: 8.2+

### Key Directories

- `content/collections/` - Main content storage
  - `articles/` - Blog posts about democratic education topics
  - `activities/` - Student learning activity records
  - `pages/` - Static pages (home, about, etc.)
- `content/taxonomies/` - Classification systems (students, teachers, subjects)
- `resources/blueprints/` - Statamic field definitions for activity tracking
- `resources/views/` - Antlers templates for activity display and filtering
- `app/` - Custom Laravel code (minimal, mostly default)
- `config/statamic/` - Statamic-specific configuration

## Development Commands

### PHP/Laravel/Statamic Commands
```bash
# Statamic CLI (primary command interface)
php please [command]

# Laravel Artisan (fallback)
php artisan [command]

# Install dependencies
composer install

# Run tests
vendor/bin/phpunit
# or
php artisan test

# Code formatting (if available)
vendor/bin/pint
```

### Frontend Build Commands
```bash
# Install dependencies
npm install

# Development build with hot reloading
npm run dev

# Production build
npm run build
```

## Content Structure

### Activity Entries
Located in `content/collections/activities/`, each activity has:
- Frontmatter with structured data (students, teachers, subjects, date, duration, notes)
- Markdown content with detailed activity description
- Blueprint: `activity` (defined in `resources/blueprints/`)
- Date-based filename format (YYYY-MM-DD-slug.md)

### Taxonomies
- **Students**: Individual student records with biographical info
- **Teachers**: Teacher profiles with specializations
- **Subjects**: Subject areas with descriptions
- All located in `content/taxonomies/[taxonomy]/`

### Articles
Located in `content/collections/articles/`, blog posts about democratic education topics with:
- Standard blog post structure
- Topics taxonomy support
- Date-based filename format

## Key Features

- Student activity tracking and documentation
- Multi-dimensional filtering (students, teachers, subjects)
- Monthly/yearly archive views for each taxonomy
- Learning journey visualization
- Collaborative activity support (multiple students/teachers)
- Duration tracking and progress insights
- Responsive design optimized for educational use
- Privacy-focused (local flat-file storage)

## Testing

The project uses PHPUnit for testing with configuration in `phpunit.xml`. Test suites:
- Unit tests: `tests/Unit/`
- Feature tests: `tests/Feature/`

## Development Notes

- Content is version controlled (flat-file CMS)
- No database required for content (uses SQLite for sessions/cache)
- Vite handles asset compilation
- TailwindCSS is purged for production builds
- Alpine.js provides minimal JavaScript interactions