using System;
using System.Runtime.InteropServices;
using System.Security.Cryptography.X509Certificates;
using System.Web;

internal class Program
{
    static void Main(string[] args)
    {
       Console.WriteLine("hello Wolrd");                        // print hello world with     \n
       Console.Write("Please Enter Your Name : ");              // print please ...  without  \n
       string Name = Console.ReadLine();                        // create variable type string and get user input
       Console.WriteLine("Wellcome " + Name);                   // print wellcome + variable Name
       Console.WriteLine("your Account is Mr.{0}",Name);        // print your .. with format spcifair with var Name
       Console.WriteLine(@"asdasd\asd\as\nd\as\tdas");          // @ to scape all \ in this string 
        int x = 30;                                             // initialize x with 30
        int y = 20;                                             // initialize y with 20
        int s = 30;                                             // initialize s with 30
        bool z = (x == y) || (s == x);                          // initialize z if z == y or s == x true else false
        Console.WriteLine(z);                                   // print z
        string name = null;                                     // initialize var name with null value
        int? age = null;                                        // to set in with null value use ? after int 
        int e_age = 0;                                          // initialize e_age wiht 0
        int vall = age.Value;                                   // to move value int? null value to anther var use var.Value
        vall = (int)age;                                        // convert age to int 
        vall = age ?? 0;                                        // vall = if age =null then age =0 else age = his value
        Convert.ToString(age);                                  // convet age to string 
        int.Parse(name);                                        // convert name to int


        int[] Numbers = new int[3] {1,2,3};                     // create int array with values
        Numbers[0] = 5;                                         // set Numbers of 0 with value 5 
        Numbers[1] = 5;                                         // set Numbers of 1 with value 5
        Numbers[2] = 5;                                         // set Numbers of 2 with value 5
        string[] Names = new string[3] {"Mohammed","Mahmoud","Ahmed"};// create string array with values
        Names[0] = "Mohammed";                                  // set Names of 0 with value Mohammed
        Names[1] = "Mahmoud";                                   // set Names of 0 with value Mahmoud
        Names[2] = "Ahmed";                                     // set Names of 0 with value Ahmed
        myclass cls = new myclass();                            // create object from class

        Console.ReadKey(true);                                  // pause console Press any key to continue
    }
}
                    // this is a summary of class
/// <summary>
/// Welcome in my class     
/// </summary>
class myclass
{

}