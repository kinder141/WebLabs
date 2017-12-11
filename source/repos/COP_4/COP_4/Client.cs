using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.IO;
using cop4.server;

namespace COP_4
{
   public class Client 
    {
        public string text;
        public void DownloadText()
        {
            try
            { 
                using (StreamReader sr = new StreamReader("in.txt"))
                {
                    text = sr.ReadToEnd();
                }
            }
            catch(Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
        }

        public void Culc()
        {
            try
            {
                using (StreamWriter sw = new StreamWriter("result.txt"))
                {
                    Server server = new Server();
                    int count;
                    server.CountOfLetters(text, out count);
                    Console.WriteLine("Кол-во букв = " + count);
                    sw.WriteLine("Кол-во букв = " + count);
                    server.CountOfWords(text, out count);
                    Console.WriteLine("Кол-во слов = " + count);
                    sw.WriteLine("Кол-во слов = " + count);
                    server.CountOfSentenses(text, out count);
                    Console.WriteLine("Кол-во предложений = " + count);
                    sw.WriteLine("Кол-во предложений = " + count);
                    server.CountOfSpaces(text, out count);
                    Console.WriteLine("Кол-во пробелов = " + count);
                    sw.WriteLine("Кол-во пробелов = " + count);
                    server.CountOfSplitters(text, out count);
                    Console.WriteLine("Кол-во разделителей = " + count);
                    sw.WriteLine("Кол-во разделителей = " + count);
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
        }

    }
}
