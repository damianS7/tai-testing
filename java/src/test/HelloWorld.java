package test;

public class HelloWorld {
	public static void main(String[] args) {
		System.out.println("Hello World!!!");
		
		
		for (int index = 0, selector = 1, eleccion = 2; index < 20; index = ((index+selector) * eleccion)) {
			System.out.println(index);
			selector++;
		}
	}
}
