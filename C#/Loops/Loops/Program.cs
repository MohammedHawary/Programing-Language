using System;


namespace Loops
{
    internal class Program
    {
        static void Main()
        {
            int[] Numbers = new int[5];

            for(int i = 0; i < Numbers.Length; i++)
            {
                Console.Write("Number of {0} = ",i);
                Numbers[i] = int.Parse(Console.ReadLine());
            }
            foreach(int i in Numbers)
            {
                Console.WriteLine("The Number ",i);
            }
        }
    }
}
