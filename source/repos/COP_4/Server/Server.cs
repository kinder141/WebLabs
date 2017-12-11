using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace cop4.server
{
    public class Server
    {
        
        public void CountOfLetters(string input,out int count)
        {
            count = 0;
            for(int i=0;i<input.Length;i++)
            {
                if(Char.IsLetter(input[i]))
                count++;
            }
        }
        public void CountOfWords(string input, out int count)
        {
            count = 0;
            for (int i = 0; i < input.Length; i++)
            {
                if (Char.IsLetter(input[i]) && (Char.IsPunctuation(input[i+1]) || input[i+1]==' '))
                    count++;
            }
        }
        public void CountOfSentenses(string input, out int count)
        {
            count = 0;
            for (int i = 0; i < input.Length; i++)
            {
                if (input[i] == '.'|| input[i] == '?'|| input[i] == '!')
                    count++;
            }

        }
        public void CountOfSpaces(string input, out int count)
        {
            count = 0;
            for (int i = 0; i < input.Length; i++)
            {
                if (input[i] == ' ')
                    count++;
            }
        }
        public void CountOfSplitters(string input, out int count)
        {
            count = 0;
            for (int i = 0; i < input.Length; i++)
            {
                if (Char.IsPunctuation(input[i]))
                    count++;
            }
        }
    }
}
