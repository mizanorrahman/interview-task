# interview-task

## Description

This project is a Laravel-based API for managing products, categories, orders, and reviews. It provides RESTful endpoints to fetch product data, filter by category, and sort by various criteria. The project demonstrates a multi-relationship database structure with features like dynamic sorting and data aggregation.

---

## Features

- Manage **Products**, **Categories**, **Orders**, and **Reviews**.
- Fetch products of a specific category using the `/category/{slug}/products` endpoint.
- Supports sorting products by:
  - Best Sell
  - Top Rated
  - Price (High to Low)
  - Price (Low to High)
- Relationships and eager loading for optimized database queries.
- Seeder and factory setup for generating dummy data.

---

## Installation

### Prerequisites
Ensure you have the following installed:
- PHP >= 8.0
- Composer
- MySQL
- Laravel >= 9.0

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/mizanor/interview-task.git
   cd interview-task






Install dependencies:


composer install
Set up the .env file:


cp .env.example .env
Update the .env file with your database credentials.
Generate the application key:


php artisan key:generate
Run migrations and seed the database:


php artisan migrate --seed
Serve the application:


php artisan serve
The API will be available at http://localhost:8000.

Usage
API Endpoints
Get Products by Category
Endpoint: /api/category/{slug}/products

Method: GET

Query Parameters:
sort (optional):
best_sell
top_rated
price_high_to_low
price_low_to_high


Example:
GET http://localhost:8000/api/category/electronics/products?sort=top_rated

Database Structure
Tables
Products:
id, name, slug, price
Categories:
id, name, slug, parent_id
ProductCategories:
product_id, category_id
Orders:
id, grand_total, shipping_cost, discount, user_id
OrderDetails:
id, product_id, order_id, unit_price, quantity
ProductReviews:
id, product_id, user_id, comment, rating

Relationships
Product ↔ Category: Many-to-Many

Product ↔ ProductReview: One-to-Many

Order ↔ OrderDetail: One-to-Many
