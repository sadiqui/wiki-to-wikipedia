# Wiki Project

## Project Context
Wiki needs an efficient content management system and a corresponding front-end to provide an exceptional user experience.

This system should allow administrators to easily manage categories, tags, and wikis, while giving authors the ability to create, edit, and delete their own content.

On the front-end, the focus will be on a user-friendly interface, with features such as simplified registration, an effective search bar, and dynamic displays of the latest wikis and categories for easy navigation.

The main goal is to create a collaborative space where everyone can work together, create, find, and share wikis in an easy and engaging manner.

## Key Features

### Back Office

#### Category Management (admin)

Administrators should have the ability to create, edit, and delete categories to organize the content.

Multiple wikis should be able to be associated with a category.

#### Tag Management (admin)

Administrators should be able to create, edit, and delete tags to facilitate content search and grouping.

Tags should be associated with wikis for more precise navigation.

#### Author Registration

Authors should be able to register on the platform by providing basic information such as name, email address, and secure password.

#### Wiki Management (authors and admins)

Authors should have the ability to create, edit, and delete their own wikis.

Authors should be able to associate a single category and multiple tags with their wikis for easy organization and search.

Administrators should have the ability to archive inappropriate wikis to maintain a safe and relevant environment.

#### Dashboard Homepage

View entity statistics through the dashboard.

### Front Office

#### Login and Register

Users should have the ability to create an account (Register) by providing basic information, as well as log in (Login) to their existing accounts. If the user has an administrator role, they will be redirected to the dashboard page; otherwise, they will be redirected to the homepage.

#### Search Bar

A search bar should be available to allow visitors to search for wikis, categories, and tags without needing to refresh the page (using AJAX).

#### Display of Latest Wikis

The homepage or a dedicated section should display the latest wikis added to the platform, providing users with quick access to the most recent content.

#### Display of Latest Categories

A separate section should present the latest created or updated categories, allowing users to quickly discover recently added themes on the platform.

#### Redirect to Wiki Single Page

When clicking on a wiki, users should be redirected to a dedicated single page for that wiki, providing comprehensive details such as content, associated categories, tags, and author information.

## Used Technologies

- Frontend: HTML5, CSS Framework, and JavaScript
- Backend: PHP 8 with an MVC architecture
- Database: PDO driver