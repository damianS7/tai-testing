package test;
import java.util.List;
import java.util.function.Consumer;
import java.util.ArrayList;
import java.util.Iterator;

public class ArraysDemo {
	private List<String> list = new ArrayList<String>();
	private int[] intArr = {0, 4, 5, 9 ,22, 21};

	public static void main(String[] args) {
		ArraysDemo arr = new ArraysDemo();
		arr.list.add("A");
		
		// Foreach
		for (String item : arr.list) {
			System.out.println(item);
		}
		
		// Array for
		for (int i = 0; i < arr.list.size(); i++) {
			System.out.println(arr.list.get(i));
		}
		
		// Iterator
		for (Iterator<String> iterator = arr.list.iterator(); iterator.hasNext();) {
			String item = (String) iterator.next();
			System.out.println(item);
		}
		
		arr.list.forEach( item -> System.out.println(item) );
		
	}

}
