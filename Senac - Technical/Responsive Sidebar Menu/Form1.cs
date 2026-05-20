using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Drawing.Printing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Sidebar_Menu
{
    public partial class Form1 : Form
    {
        private bool Drag;
        private int MouseX;
        private int MouseY;

        private const int WM_NCHITTEST = 0X84;
        private const int HTCLIENT = 0X1;
        private const int HTCAPTION = 0X2;

        private bool m_aeroEnabled;

        private const int CS_DROPSHADOW = 0X00020000;
        private const int WM_NCPAINT = 0X0085;
        private const int WM_ACTIVATEAPP = 0X001C;
        [System.Runtime.InteropServices.DllImport("dwmapi.dll")]

        public static extern int DwmExtendFrameIntoClientArea(IntPtr hWnd, ref Margins pMarInset);
        [System.Run]
        public Form1()
        {
            InitializeComponent();
        }

      
    }
}
