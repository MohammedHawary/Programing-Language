namespace Condition_with_GUI
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            if (int.Parse(Degree.Text) >= 50 && int.Parse(Degree.Text) <= 100)
            {
                MessageBox.Show("You Are Sucess", "Be Good");
            }else if (int.Parse(Degree.Text) < 50)
            {
                MessageBox.Show("You Are Failed", "Good Luck");
            }
            else
            {
                MessageBox.Show("Please Enter Valid Degree", "error");
            }


        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }
    }
}