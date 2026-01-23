# S3-02
## PHP Patterns

### LEVEL 1 - _completed_

- **singleton**: Refactored the code using the Singleton Pattern to ensure that only one object of a particular class is ever created. The constructor, __clone, and __wakeup methods are declared private so objects can only be instantiated through the static getInstance() method. I also added a 'roar' counter; this way, every time Tigger roars, it updates the same global state regardless of where the object is called.

- **Dependency Injection**: Making a program that simulates the routine before heading out using the Dependency Injection pattern. In this case, we've equipped the User object with the necessary items (Wallet, Keys, Phone, etc.) to leave home. By injecting these dependency objects through the User's constructor method, the code remains highly decoupled (all the classes are independent); for example, the User can accept any object that implements the Transport interface, such as an oysterCard or a Car, without needing to modify the core User logic.

### LEVEL 2 - _completed_

- **Adapter**: Refactored the code to allow incompatible classes to work together. I created a DuckInterface which is implemented by a new TurkeyAdapter class. This acts as a "bridge" between the two, translating the Turkey's methods into Duck behaviors so they can be used interchangeably in the program.

- **Facade**: Created a dishwasher program using the Facade pattern. This pattern allows us to provide a simple interface for the user, rather than forcing them to deal with a large, complex class. I grouped the specific steps into three main methods, so the user can control the whole machine with just a few simple commands instead of managing every internal part manually.

### LEVEL 3 - 

- **Strategy** : The Strategy Pattern allows a program to select the appropriate algorithm based upon the situation. The CouponGenerator interface is implemented by the BmwCouponGenerator and MercedesCouponGenerator classes. Using the CouponSorter class as a Context, specific discount algorithms are applied based on the car brand. 

- **Observer** : Observer patterns notifies registered users to automatically be notifyed of any state changes in a subject. In this case, when a new task is submitted by a student in the Moodle, the Mentor (Observer) is being notifyed. 


## Technologies
- PHP
