
Console.Write("Please Enter Your Degree : ");

double Degree = int.Parse(Console.ReadLine());


if (Degree <= 100 && Degree >= 50  )
{
    Console.WriteLine("You Are Sucess");
}
else if (Degree < 50)
{
    Console.WriteLine("You Are Failed");
}
else
{
    Console.WriteLine("Please Enter Valid Degree");
}