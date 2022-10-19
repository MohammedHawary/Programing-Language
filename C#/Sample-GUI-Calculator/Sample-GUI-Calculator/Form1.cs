using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Sample_GUI_Calculator
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void Form1_Load(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged(object sender, EventArgs e)
        {

        }

        private void textBox1_TextChanged_1(object sender, EventArgs e)
        {
            
        }

        private void button1_Click(object sender, EventArgs e)
        {
                // showing Result in New Window 
            MessageBox.Show((double.Parse(Firsr_Number.Text) + double.Parse(Second_Number.Text)).ToString());
        }

        private void button2_Click(object sender, EventArgs e)
        {
                // showing Result in New Window 
            MessageBox.Show((double.Parse(Firsr_Number.Text) - double.Parse(Second_Number.Text)).ToString());
        }

        private void button4_Click(object sender, EventArgs e)
        {
                // showing Result in New Window 
            MessageBox.Show((double.Parse(Firsr_Number.Text) / double.Parse(Second_Number.Text)).ToString());
        }

        private void button3_Click(object sender, EventArgs e)
        {
                // showing Result in New Window 
            MessageBox.Show((double.Parse(Firsr_Number.Text) * double.Parse(Second_Number.Text)).ToString());
        }
    }
}
