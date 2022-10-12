using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Project_1
{
    internal class Program
    {
        static void Main(string[] args)
        {
 
            Console.ForegroundColor = ConsoleColor.Green;
            while (true)
            {
                Console.WriteLine("\t\tWelcome in my Program ");
                Console.Write("Please Enter Your Name : ");
                string Name = Console.ReadLine();
                Console.Write("Enter Your college Code : ");
                int college_code = 0;
                try
                {
                     college_code = int.Parse(Console.ReadLine());
                }
                catch
                {
                    Console.WriteLine("Please Enter Valid Nunber !");
                    continue;
                }

                if (college_code == 2020323)
                {
                    Console.WriteLine("your Degree equal 500");
                }
                else if (college_code == 2020123)
                {
                    Console.WriteLine("your Degree equal 600");
                }
                else
                {
                    Console.WriteLine("This code couldn't Found!");
                }
                Console.ReadKey(true);
                Console.Clear();
            }
        }
    }
}
