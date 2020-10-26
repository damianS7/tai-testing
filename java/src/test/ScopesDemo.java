package test;

public class ScopesDemo {
	public int s = 5;
	
	public void methodA() {
		int s = 3;
		System.out.println(this.s);
		
		if(true) {
			System.out.println(s);
		}
	}
	
	public static void main(String[] args) {
		ScopesDemo sc = new ScopesDemo();
		sc.methodA();
		
		// var x = 1; // Java 11
		int $xx = 36;
		System.out.println($xx);
	}

}
