## History of Javascript
JavaScript's history is quite intriguing, considering how it has grown from being a language primarily for the web to becoming one of the most popular and widely used languages in various domains. Here's a brief history:
 
### The Birth of JavaScript

1. **1995**: **Brendan Eich**, then at Netscape, was tasked with developing a new scripting language for the Netscape Navigator browser. This language was initially named **Mocha**, later renamed to **LiveScript**, and eventually renamed **JavaScript**. It's noteworthy to mention that JavaScript is not directly related to Java; the naming was more of a marketing move since Java was gaining popularity at the time.

2. **1996**: Microsoft released a similar scripting language for Internet Explorer called **JScript** to avoid copyright issues with the "JavaScript" name. JScript was almost similar but had differences that sometimes caused cross-browser issues for developers.

3. **1997**: Netscape submitted JavaScript to **ECMA International** (a standards organization) for standardization, leading to the creation of the **ECMAScript** specification. The languages JavaScript, JScript, and later, Adobe's ActionScript, are all implementations of this ECMA standard.

### Evolution & Growth

4. **1999**: **ECMAScript 3** was released and became the foundational version for the modern implementations of the language.

5. **2000s**: During the early 2000s, the development of a major update to ECMAScript (intended to be ES4) was underway but ended up being abandoned due to disagreements between various parties. 

6. **2005**: The term **AJAX** (Asynchronous JavaScript and XML) was coined, highlighting a technique that used JavaScript to fetch data asynchronously and update web pages without a full page reload. This led to much smoother user experiences on the web.

7. **2009**: **ECMAScript 5 (ES5)** was released, introducing several new features and functions, such as strict mode, JSON support, and methods like `forEach` and `map` for arrays.

8. **2015**: **ECMAScript 6 (ES6)**, also known as **ECMAScript 2015**, was a major update to the language. It added a significant number of features like classes, modules, promises, arrow functions, `let` and `const` declarations, and template literals among others.

### Modern Era & Beyond

9. **2016 and Beyond**: The ECMAScript committee decided to move to an annual release cycle, leading to more frequent but smaller updates. Thus, we've seen yearly updates like **ES2016 (ES7)**, **ES2017 (ES8)**, and so on, each bringing in new features and enhancements.

10. **Frameworks and Libraries**: Over the years, numerous JavaScript libraries and frameworks have been developed. Some of the notable ones include **jQuery**, **AngularJS**, **React**, **Vue.js**, and **Node.js** (which brought JavaScript to the server-side).

11. **2020s**: JavaScript continues to evolve and adapt. With the advent of technologies like WebAssembly, the lines between native and web applications blur further. JavaScript remains a critical part of this ecosystem, and its importance in web development and beyond cannot be overstated.

In summary, from its inception in the mid-1990s to the present day, JavaScript has grown from a simple scripting language meant to add interactivity to web pages, to a robust, multi-paradigm language used in a variety of platforms and domains, from web to mobile to server-side applications and more.

--------


JavaScript is a versatile, object-oriented programming language primarily used to add interactivity and functionality to websites. It runs in the web browser, making it a client-side language, but with the advent of technologies like Node.js, it can also be used on the server side.

### Basics of JavaScript:

1. **Embedding JavaScript in HTML**:
   
   You can either place your JavaScript code directly in an HTML file between `<script>` tags, or link to an external `.js` file.
   
   ```html
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>JavaScript Basics</title>
   </head>
   <body>
   
       <script>
           // Your JavaScript code here
           alert('Hello, World!');
       </script>
   
   </body>
   </html>
   ```

2. **Variables**:
   
   Variables are used to store data values.
   
   ```javascript
   var name = "John";
   let age = 25;
   const pi = 3.141592653589793;
   ```

   Here, `var` is the old way of declaring variables, while `let` is the newer ES6 way. `const` is used to declare constants whose values cannot change.

3. **Data Types**:
   
   JavaScript has several built-in data types:
   - String: `"Hello"`
   - Number: `123, 12.34`
   - Boolean: `true, false`
   - Object: `{name: "John", age: 25}`
   - Array: `[1, 2, 3, 4]`
   - Null: `null`
   - Undefined: `undefined`

4. **Functions**:

   Functions are blocks of reusable code.
   
   ```javascript
   function greet(name) {
       return "Hello, " + name + "!";
   }

   alert(greet("Alice"));
   ```

5. **Events**:

   JavaScript can be used to respond to user interactions like clicks, hovers, etc.
   
   ```html
   <button onclick="alert('Button was clicked!')">Click Me</button>
   ```

6. **Loops**:

   JavaScript supports different kinds of loops:
   
   ```javascript
   for (let i = 0; i < 5; i++) {
       console.log(i);
   }
   ```

### Try this in your browser:

1. Open a new browser tab.
2. Press `F12` or right-click on the page and choose "Inspect" to open developer tools.
3. Go to the "Console" tab.
4. Type or paste the above JavaScript code snippets (like the functions, variables, loops) into the console and press `Enter`.

This will execute the code, and you'll see immediate feedback.

To see a more integrated example, you can save the HTML examples to a `.html` file and then open it in your browser. You'll see the rendered HTML and any JavaScript code will execute as the page loads or upon interacting with the elements (like the button).

----------

## Object Oriented Programming in Javascript

Object-Oriented Programming (OOP) is a programming paradigm that uses "objects" to structure and organize code. These objects contain data in the form of fields (often known as attributes or properties) and code in the form of methods.

JavaScript supports OOP with a combination of its unique prototypal inheritance and the class-based system introduced in ES6. We'll explore both.

### 1. Objects:

In JavaScript, an object is a collection of key-value pairs.

```javascript
let person = {
    firstName: "John",
    lastName: "Doe",
    greet: function() {
        console.log(`Hello, ${this.firstName} ${this.lastName}!`);
    }
};

person.greet();  // Output: "Hello, John Doe!"
```

### 2. Prototypal Inheritance:

Every JavaScript object has an internal link to another object called its "prototype." When trying to access a property that does not exist in an object, JavaScript tries to find this property in the object's prototype.

```javascript
function Person(firstName, lastName) {
    this.firstName = firstName;
    this.lastName = lastName;
}

Person.prototype.greet = function() {
    console.log(`Hello, ${this.firstName} ${this.lastName}!`);
};

let person1 = new Person("John", "Doe");
person1.greet();  // Output: "Hello, John Doe!"
```

In the above, `person1` doesn't have the `greet` method on the object itself, but it's accessible via its prototype.

### 3. ES6 Classes:

With ES6, a more traditional class-based OOP approach was introduced.

```javascript
class Person {
    constructor(firstName, lastName) {
        this.firstName = firstName;
        this.lastName = lastName;
    }

    greet() {
        console.log(`Hello, ${this.firstName} ${this.lastName}!`);
    }
}

let person2 = new Person("Alice", "Smith");
person2.greet();  // Output: "Hello, Alice Smith!"
```

### 4. Inheritance with Classes:

Using the `extends` keyword, you can create a subclass.

```javascript
class Employee extends Person {
    constructor(firstName, lastName, position) {
        super(firstName, lastName);
        this.position = position;
    }

    introduce() {
        console.log(`Hello, I'm ${this.firstName} ${this.lastName} and I work as a ${this.position}.`);
    }
}

let employee1 = new Employee("Bob", "Johnson", "Engineer");
employee1.introduce();  // Output: "Hello, I'm Bob Johnson and I work as a Engineer."
```

In the above example, `Employee` is a subclass (or child class) of `Person` and can access methods from the `Person` class.

### Principles of OOP:

1. **Encapsulation**: The bundling of data (attributes) and methods that operate on the data into a single unit (class). This helps in hiding the internal implementation details of a class.
   
2. **Abstraction**: Hiding complex implementation details and showing only the essential features of an object.
   
3. **Inheritance**: Allows a class (child class) to inherit properties and methods from another class (parent class).
   
4. **Polymorphism**: The ability to call the same method on different objects and have each of them respond in their own way.

While JavaScript's OOP may feel different from traditional class-based languages like Java or C++, it offers a flexible approach, combining both prototypal and class-based systems.




## Classes Example

In JavaScript, classes are a blueprint for creating objects with shared properties and methods. Classes were introduced in ECMAScript 6 (ES6) and provide a more structured way to define object constructors and prototypes.

Here's a step-by-step guide to creating a JavaScript class:

### 1. Basic Class Definition:

Use the `class` keyword followed by the class name.

```javascript
class MyClass {
}
```

### 2. Constructor:

The `constructor` method is a special method for creating and initializing objects created with a class.

```javascript
class MyClass {
    constructor(parameter1, parameter2) {
        this.property1 = parameter1;
        this.property2 = parameter2;
    }
}
```

### 3. Methods:

You can define methods inside the class.

```javascript
class MyClass {
    constructor(parameter1, parameter2) {
        this.property1 = parameter1;
        this.property2 = parameter2;
    }

    myMethod() {
        console.log('This is a method.');
    }
}
```

### 4. Instantiating a Class:

You can create a new instance of the class using the `new` keyword.

```javascript
const obj = new MyClass('value1', 'value2');
obj.myMethod();  // This will output: "This is a method."
```

### 5. Inheritance:

Classes in JavaScript support inheritance using the `extends` keyword.

```javascript
class ChildClass extends MyClass {
    anotherMethod() {
        console.log('This is another method from the child class.');
    }
}

const childObj = new ChildClass('value1', 'value2');
childObj.myMethod();         // This will output: "This is a method."
childObj.anotherMethod();    // This will output: "This is another method from the child class."
```

### 6. Getters and Setters:

JavaScript classes support getter and setter methods.

```javascript
class MyClass {
    constructor() {
        this._property = 'default';
    }

    // Getter
    get property() {
        return this._property;
    }

    // Setter
    set property(value) {
        this._property = value;
    }
}

const obj = new MyClass();
console.log(obj.property);   // Output: "default"
obj.property = 'new value';
console.log(obj.property);   // Output: "new value"
```


## DOM (Document Object Model)

The **Document Object Model (DOM)** is a programming interface for web documents. It represents the structure of a document as a tree of objects. Each object corresponds to a part of the document, such as an element or an attribute. The DOM provides a representation of the document as a structured group of nodes and objects that have properties and methods. Essentially, it acts as a bridge between the content in your web page and the programming code you write, allowing the content to be dynamically modified.

### Key Features of the DOM:

1. **Structured Representation**: The DOM represents a document as a tree structure where each node corresponds to a part of the page (e.g., an element or an attribute).
2. **Language Neutral**: While the DOM is often accessed and manipulated using JavaScript, it is not a feature of JavaScript. It is designed to be used with any programming language.
3. **Dynamic**: The DOM is dynamic, which means you can modify it after the page has been rendered, leading to content changes without reloading the page.

### Example:

Consider the following simple HTML document:

```html
<!DOCTYPE html>
<html>
<head>
    <title>Sample Page</title>
</head>
<body>
    <h1 id="heading">Hello DOM!</h1>
    <p>Here is some content.</p>
</body>
</html>
```

In the DOM representation:

- The `document` object is the entry point to the DOM.
- Elements like `<html>`, `<head>`, `<body>`, `<h1>`, and `<p>` are nodes.
- Attributes like `id="heading"` are also part of the DOM and can be accessed and modified.
  
Using JavaScript, you can interact with the DOM:

```javascript
// Access the element with id="heading"
let heading = document.getElementById("heading");

// Modify its content
heading.innerHTML = "DOM Manipulated!";
```

If you were to execute this JavaScript, the text inside the `<h1>` element would change from "Hello DOM!" to "DOM Manipulated!".

### Why the DOM is Important:

1. **Dynamic Web Content**: The DOM allows scripts to update the content, structure, and style of a webpage dynamically, without needing to refresh the page.
2. **Interactivity**: Web developers use the DOM to create interactive elements on a webpage, such as dropdown menus, modal windows, tabs, carousels, and more.
3. **Accessibility**: Manipulating the DOM can aid in making content more accessible, such as by dynamically changing the content based on user preferences or needs.



## DOM Management with Javascript

The Document Object Model (DOM) represents the structure of an HTML document. JavaScript can interact with the DOM to dynamically update content, structure, and styles of a web page.

Here's a primer on how to use JavaScript to manage and manipulate the DOM:

### 1. **Selecting Elements**:

- **By ID**:
  ```javascript
  let element = document.getElementById("myId");
  ```

- **By Class Name**:
  ```javascript
  let elements = document.getElementsByClassName("myClass");
  ```

- **By Tag Name**:
  ```javascript
  let elements = document.getElementsByTagName("p");  // selects all <p> elements
  ```

- **Using CSS Selectors** (most versatile):
  ```javascript
  let element = document.querySelector("#myId");          // selects the first element with id="myId"
  let elements = document.querySelectorAll(".myClass");   // selects all elements with class="myClass"
  ```

### 2. **Changing Content**:

- **innerText**:
  ```javascript
  element.innerText = "New text content";
  ```

- **innerHTML**:
  ```javascript
  element.innerHTML = "<strong>New HTML content</strong>";
  ```

- **Changing Attributes**:
  ```javascript
  let imgElement = document.querySelector("img");
  imgElement.setAttribute("src", "new-image.jpg");
  ```

### 3. **Changing Styles**:

```javascript
element.style.color = "blue";
element.style.fontSize = "20px";
```

### 4. **Adding and Removing Elements**:

- **createElement**:
  ```javascript
  let newElement = document.createElement("div");
  newElement.innerText = "I'm a new div";
  ```

- **appendChild**:
  ```javascript
  let parentElement = document.getElementById("parent");
  parentElement.appendChild(newElement);
  ```

- **removeChild**:
  ```javascript
  parentElement.removeChild(newElement);
  ```

- **insertBefore**:
  ```javascript
  let referenceElement = document.getElementById("reference");
  parentElement.insertBefore(newElement, referenceElement);
  ```

### 5. **Event Handling**:

JavaScript can respond to events such as clicks, keyboard input, and mouse movements.

```javascript
let btnElement = document.getElementById("myButton");
btnElement.addEventListener("click", function() {
    alert("Button was clicked!");
});
```

### 6. **Traversing the DOM**:

You can navigate between different elements in the DOM tree.

- **Parent**:
  ```javascript
  let parent = element.parentElement;
  ```

- **Children**:
  ```javascript
  let children = element.children;
  ```

- **Next and Previous Siblings**:
  ```javascript
  let nextSibling = element.nextSibling;
  let previousSibling = element.previousSibling;
  ```

### Example:

Let's put everything together with a small example. Suppose you have the following HTML:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DOM Manipulation</title>
</head>
<body>

<h1 id="title">Hello DOM!</h1>
<button id="changeTitle">Change Title</button>

<script src="script.js"></script>
</body>
</html>
```

In the `script.js`:

```javascript
document.getElementById("changeTitle").addEventListener("click", function() {
    let titleElement = document.getElementById("title");
    titleElement.innerText = "Title Changed!";
    titleElement.style.color = "red";
});
```

When you click the button, the title's text will change to "Title Changed!" and its color will turn red.
