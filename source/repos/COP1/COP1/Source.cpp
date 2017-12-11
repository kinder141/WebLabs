#include <cstring>
//#include <string.h>
extern "C" 

void CountLetters(char* str, int*count)
{
	int i = 0;
	 *count = 0;
	 while (str[i] != '\0')
	 {
		 if ((str[i] >= 65 && str[i] <= 90) || (str[i] >= 97 && str[i] <= 122)) {
			 (*count)++;
		 }
		 i++;
	 }
}

void CountWords(char* str, int* count)
{
	int i = 0;
	*count = 0;
	while (str[i] != '\0')
	{
		//ATTENTION!!! 
		//Ѕыдлокод!
		//явл€етс€ ли текущий символ буквой, а следующий за ним - не буквой. ≈сли да, то мы нашли слово.
		if (((str[i] >= 65 && str[i] <= 90) || (str[i] >= 97 && str[i] <= 122)) && ((str[i + 1] < 65 || str[i + 1] > 90) && (str[i + 1] < 97 || str[i + 1] > 122)))
		{
			(*count)++;;
		}
		i++;
	}
}

void CountSentences(char* str, int*count)
{
	int i = 0;
	*count = 0;
	while (str[i] != '\0')
	{
		if ((str[i] == '.' || str[i] == '!' || str[i] == '?') && (str[i + 1] != '.' && str[i + 1] != '!' && str[i + 1] != '?'))
		{
			(*count)++;
		}
		else if (str[i + 1] == '\0')
		{
			(*count)++;
		}
		i++;
	}
}

void CountOfSpaces(char* str, int*count)
{
	int i = 0;
	*count = 0;
	while (str[i] != '\0')
	{
		if (str[i] == ' ')
		{
			(*count)++;;
		}
		i++;
	}
}

void CountOfSplitters(char* str, int*count)
{
	int i = 0;
	*count = 0;
	while (str[i] != '\0')
	{
		if (str[i] == '.' || str[i] == ',' || str[i] == ':' || str[i] == ';' || (str[i] == '-' && str[i+1] == ' ') || str[i] == '!' || str[i] == '?')
		{
			(*count)++;
		}
		i++;
	}
	
}