# Inquiry Landing Page Development

## Purpose

This project aims to create a Laravel-based landing page with a detailed inquiry form, redirecting to a thank you page, sending confirmation emails, and optionally, implementing a dashboard for viewing and filtering form entries.

## Development Process

1. **Project Setup:**
   - Laravel project created using Composer.

2. **Controller Creation:**
   - InquiryController with methods for showing the form, handling form submissions, and displaying the thank-you page.

3. **Routes:**
   - Routes defined for the inquiry page, form submissions, and optionally, for the dashboard.

4. **Views:**
   - Blade views created for the inquiry form and thank-you page.

5. **Form Validation and Email Sending:**
   - Form validation and email sending implemented in the `submitForm` method.

6. **Database (Optional):**
   - Migration created for the `inquiries` table.
   - Optionally, an `Inquiry` model created.

7. **Dashboard (Optional):**
   - DashboardController with methods for displaying and filtering form entries.
   - Blade views created for the dashboard.

8. **Route Updates:**
   - Routes updated to include dashboard routes.

## Optional Pro Challenge: Dashboard Implementation

If the optional challenge is completed, document the functionality of the dashboard, including viewing and filtering form entries.

## Local Setup Instructions

1. Clone the repository: `git clone [repository_url]`
2. Install dependencies: `composer install`
3. Set up the environment: `cp .env.example .env`
4. Generate application key: `php artisan key:generate`
5. Configure the database in the `.env` file.
6. **Mailtrap Configuration:**
    - Sign up for a free Mailtrap account: [Mailtrap Signup](https://mailtrap.io/)
    - In your Mailtrap inbox, find your SMTP credentials (Host, Port, Username, Password).
    - Update the following variables in the `.env` file with your Mailtrap credentials:
        ```env
        MAIL_MAILER=smtp
        MAIL_HOST=your_mailtrap_host
        MAIL_PORT=your_mailtrap_port
        MAIL_USERNAME=your_mailtrap_username
        MAIL_PASSWORD=your_mailtrap_password
        MAIL_ENCRYPTION=tls
        ```
        Example: 
        MAIL_MAILER=smtp
        MAIL_HOST=smtp.mailtrap.io
        MAIL_PORT=2525
        MAIL_USERNAME=your_mailtrap_username
        MAIL_PASSWORD=your_mailtrap_password
        MAIL_ENCRYPTION=tls

7. Run migrations (if applicable): `php artisan migrate`
8. Serve the application: `php artisan serve`

## Functionality

- Inquiry form accessible at `/inquiry`.
- Form submissions trigger confirmation emails.
- Thank-you page displayed after successful form submission.
- Optionally, dashboard available for viewing and filtering form entries.

## Further Improvements

- Implement user authentication for accessing the dashboard.
- Enhance the dashboard UI/UX.
