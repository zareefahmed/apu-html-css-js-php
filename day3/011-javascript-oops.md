Object-oriented programming (OOP) is a programming paradigm that uses objects and classes for organizing code. JavaScript, while primarily known as a prototype-based language, also supports OOP concepts. Let's dive into a basic tutorial on OOP in JavaScript.

### 1. Understanding Objects

In JavaScript, an object is a standalone entity with properties and types. Think of an object as a 'noun' in the real world, like a 'car' or a 'person'.

```javascript
let person = {
    firstName: "John",
    lastName: "Doe",
    age: 30,
    greet: function() {
        console.log("Hello, " + this.firstName);
    }
};

person.greet(); // Outputs: Hello, John
```

### 2. Creating Classes

A class is a blueprint for creating objects. It encapsulates data and functions that operate on the data.

```javascript
class Car {
    constructor(brand, model) {
        this.brand = brand;
        this.model = model;
    }

    displayDetails() {
        console.log(`This car is a ${this.brand} ${this.model}.`);
    }
}

let myCar = new Car("Toyota", "Corolla");
myCar.displayDetails(); // Outputs: This car is a Toyota Corolla.
```

### 3. Inheritance

Inheritance is a mechanism where a new class inherits properties and methods from an existing class.

```javascript
class Vehicle {
    constructor(type) {
        this.type = type;
    }

    describe() {
        console.log(`This is a ${this.type}.`);
    }
}

class Bike extends Vehicle {
    constructor(brand, model) {
        super("Bike");
        this.brand = brand;
        this.model = model;
    }

    displayDetails() {
        console.log(`This bike is a ${this.brand} ${this.model}.`);
    }
}

let myBike = new Bike("Yamaha", "MT-07");
myBike.describe();       // Outputs: This is a Bike.
myBike.displayDetails(); // Outputs: This bike is a Yamaha MT-07.
```

### 4. Encapsulation

Encapsulation is the bundling of data and methods that operate on that data within a single unit, or object. In JavaScript, you can achieve encapsulation using closures and private members.

```javascript
class BankAccount {
    #balance = 0; // Private field

    deposit(amount) {
        this.#balance += amount;
        console.log(`Deposited ${amount}. Current balance: ${this.#balance}`);
    }

    withdraw(amount) {
        if (amount > this.#balance) {
            console.log("Insufficient funds");
            return;
        }
        this.#balance -= amount;
        console.log(`Withdrew ${amount}. Current balance: ${this.#balance}`);
    }
}

let account = new BankAccount();
account.deposit(100);  // Outputs: Deposited 100. Current balance: 100
account.withdraw(50);  // Outputs: Withdrew 50. Current balance: 50
```

### 5. Polymorphism

Polymorphism allows objects of different classes to be treated as objects of a common superclass. In JavaScript, polymorphism is achieved through method overriding.

```javascript
class Animal {
    speak() {
        console.log("Some sound");
    }
}

class Dog extends Animal {
    speak() {
        console.log("Woof");
    }
}

class Cat extends Animal {
    speak() {
        console.log("Meow");
    }
}

let dog = new Dog();
dog.speak(); // Outputs: Woof

let cat = new Cat();
cat.speak(); // Outputs: Meow
```
