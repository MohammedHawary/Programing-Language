using System;


namespace IO   // => NameSpace Like Partiton 
{                                                           
    internal class Program // => Class Like  Folder
    {                                                       
        static void Main() // => Method Like Files
        {

            Console.WriteLine("this line with new line ");  // Write with     \n
            Console.Write("this line without ");            // Write without  \n
            Console.WriteLine("new line ");                 // Write with     \n


            Console.Write("Please Enter Your Name : ");
            string UserName = Console.ReadLine();           // intialize Var UserName and Get Input From User

            Console.Write("Please Enter Your Age  : ");
            int Age = int.Parse(Console.ReadLine());        // intialize Var Age and Get intger Value from User

            Console.WriteLine("Welcome Mr." + UserName + " Your Age : " + Age);


        }
    }
}
