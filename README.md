# S3-02
## PHP Patterns

### LEVEL 1 - _completed_

- **singleton**: Refactored the code using the Singleton Pattern to ensure that only one object of a particular class is ever created. The constructor, __clone, and __wakeup methods are declared private so objects can only be instantiated through the static getInstance() method. I also added a 'roar' counter; this way, every time Tigger roars, it updates the same global state regardless of where the object is called.

- **Dependency Injection**: Making a program that simulates the routine before heading out using the Dependency Injection pattern. In this case, we've equipped the User object with the necessary items (Wallet, Keys, Phone, etc.) to leave home. By injecting these dependency objects through the User's constructor method, the code remains highly decoupled (all the classes are independent); for example, the User can accept any object that implements the Transport interface, such as an oysterCard or a Car, without needing to modify the core User logic.

### LEVEL 2 -

- **Adapter** :

- **Facade** :

### LEVEL 3 -

- **Strategy** :

- **Observer** :


## Technologies
- PHP
