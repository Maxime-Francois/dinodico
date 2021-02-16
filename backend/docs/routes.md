# Routes

## Sprint 2

| URL | méthode HTTP | Contrôleur->méthode | Nom de route | Commentaire |
|-----|-----|-----|-----|-----|
| admin/category | GET | admin\TypeController->categories() | category | Liste les catégories |
| admin/category/add | GET,POST | admin\TypeController->categoryAdd() | category-add | Formulaire d'ajout d'une catégorie |
| admin/category/[i:id]/edit | GET,POST | admin\TypeController->edit() | category-edit | Formulaire d'édition d'une catégorie |
| admin/categories/[i:id]/delete | POST | admin\TypeController->delete() | category-delete | Supprime une catégorie |
| admin/product | GET | admin\DinosaureController->products() | product | Liste les produits |
| admin/product/add | GET,POST | admin\DinosaureController->add() | product-add | Formulaire d'ajout d'un produit |
| /products/[i:id]/edit | GET,POST | admin\DinosaureController->edit() | product-edit | Formulaire d'édition d'un produit |
| /products/[i:id]/delete | POST | admin\DinosaureController->delete() | product-delete | Supprime un produit |
