# Singleton

## What is the Singleton Pattern?

The Singleton pattern is a design pattern that restricts the instantiation of a class to just one instance. This pattern is useful when you need to ensure that only one instance of an object exists, such as in cases of database connection managers, global configurations, or other situations where a single shared instance is sufficient for the application to function.

## Code Structure

The code implements the Singleton pattern using a **Trait**. The **`SingletonTrait`** can be reused in any class that needs a single instance, ensuring controlled creation and access to the instance.

### Key Features:

- **Single Instance**: The class using the `SingletonTrait` will have only one instance throughout the execution.
- **Prevents Cloning**: Cloning the instance is disabled to avoid multiple instances.
- **Prevents Unserialization**: Unserialization of a Singleton instance throws an exception to prevent creating multiple instances from an already existing one.

## How to Use
To use the Singleton pattern in your project, follow these steps:

### Example of Usage:

1. Create a class that uses the Singleton trait.
2. Call `getInstance()` to access the single instance.
3. Check if two variables are referring to the same instance by comparing them.

```php
$instance1 = MySingleton::getInstance();
$instance2 = MySingleton::getInstance();
var_dump($instance1 === $instance2);  // Should output bool(true)
