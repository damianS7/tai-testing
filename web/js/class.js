class Car {
    MAX_FUEL = 100;
    constructor(marca) {
        this.marca = marca;
        this.speed = 0;
        this.fuel = 13;
    }
    acelerar() { this.speed = 35;} 
    static mymethod() { console.log("Metodo estatico"); }
}

class BMW extends Car {
    constructor() {
        super("BMW");
    }
}

let mycar = new Car("BMW");
mycar.acelerar();
console.log(mycar.speed);

// mycar.mymethod(); // Esto daria error
// Car.mymethod(); // Esto funcionaria

let myBMW = new BMW();
