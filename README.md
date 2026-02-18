
# Plant Catalog - MVC Practice   ᭄᭡𓍊𓋼𓍊𓋼𓍊᭄᭡

This is a straightforward PHP project created to practice code separation into layers and the use of professional web development tools.

## What does it do?
MVC Organization: The code is structured into Model, View, and Controller to make it easier to maintain and understand.

Twig Implementation: I used this template engine to keep the HTML clean and separate from the PHP logic.

Composer: Used for dependency management (Twig) and class autoloading.

Environment Stability: optimized project environment with a curated .gitignore to handle internal dependencies (/vendor) and IDE-specific indexing issues.

## Technical details
* PHP 8.5.0

* Twig 3.22.1

* Install via composer install.

# How to run:
* CLI:

  ```bash
   php -S localhost:3000 -t Public
* You can also run the project using the “PHP Server” extension in VSCode by serving Public/Index.php.


## Roadmap - Evolution
[ ] Data Persistence: Transitioning from static arrays to a MySQL database.

[ ] RESTful Logic: Implementing specialized controllers for API-like data handling.

[ ] Dynamic Filtering: Adding a search engine to filter catalog items by category and origin.

Also planning to add more plants to the catalog and improve /Views presentation.
