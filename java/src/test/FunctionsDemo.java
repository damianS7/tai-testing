package test;

public class FunctionsDemo {

	interface myImpl {
		public void saySomething(String str);
	}
	
	public void funcionAnonima() {
		myImpl imp = new myImpl() {
			@Override
			public void saySomething(String str) {
				System.out.println("Funciona anonima");
			}
		};
		
		imp.saySomething("");
	}
	
	public void functionArrow(String str) {
		System.out.println(str);
	}
	
	public static void main(String[] args) {
		FunctionsDemo fd = new FunctionsDemo();
		fd.funcionAnonima();
	}

	
}
