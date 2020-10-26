using System;

namespace HelloWorldSpace
{
    class claseTAI {public int n;}
    struct structTAI {public int n;}
    
    class Program
    {
        static void evalClass (claseTAI ct) { ct.n = 8;} 
        static void evalStruct (structTAI st) { st.n = 8;}
            
        
        static void Main(string[] args)
        {
            //Program2 p = new Program2();
            //p.myn();
            //p.mymethod1();
            
            //Program3 p3 = new Program3();
            //p3.getS();
            //Console.WriteLine(p3.myVar.get());
            
            
            string str = "jaja";
            int idx = 0;
            while(idx < str.Length) {
                // Console.WriteLine(str[idx]);
                idx++;
            }
            
            
            claseTAI ct = new claseTAI();
            structTAI st = new structTAI();
            ct.n = 5;
            st.n = 5;
            
            evalClass(ct);
            evalStruct(st);
            Console.WriteLine("Valor clase: ct.n = {0}", ct.n);
            Console.WriteLine("Valor struct: st.n = {0}", st.n);
        }
    }
    
    class Program3 : Program2 
    {
        
        
        public int getS()
        {
            Console.WriteLine(this.s);
            return this.s;
        }
    }
    
    class Program2 
    {
        protected int s = 8;
        public void mymethod1()
        {
            var s = "huehue";
            var sx = 5;
            Console.WriteLine(sx);
            Console.WriteLine(sx.GetType());
            Console.WriteLine(typeof(int));
        }
        
        public int myn() 
        {
            string str = "Hola mundo";
            Console.WriteLine(str);
            
            int[] arr = {1, 5, 9};
            //int[] arr2 = [9, 11, 13]; // Mal
            Console.WriteLine(arr[1]);
            int c = arr[1] > 3 ? 777 : 888;
            Console.WriteLine(c);
            return 12;
        }
    }
}

