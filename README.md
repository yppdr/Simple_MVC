# Simple MVC

A simple and efficient MVC in PHP


### Folder and file structure
```
/MyProject/
    /app/
        /controllers/
            HomeController.php
        /models/
            User.php
        /views/
            home.php
    /public/
        index.php
    /core/
        Controller.php
        Model.php
        Router.php
    /config/
        config.php
    .htaccess
```

### How it works:

- **Router** : The Router.php file parses the URL and determines which controller and method to call.
- **Controller** : The controller handles the application logic. For example, in HomeController, we use the User model to get the users and pass this data to the view.
- **Model** : Models interact with the database. The User.php model retrieves the users from the database.
- **View** : Views are responsible for display. Here, home.php displays a list of users retrieved by the model.