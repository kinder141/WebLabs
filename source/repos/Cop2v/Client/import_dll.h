#pragma once
using namespace std;
__declspec(dllimport) void CountLetters(char* str, int*count);
__declspec(dllimport) void CountWords(char* str, int* count);
__declspec(dllimport) void CountSentences(char* str, int*count);
__declspec(dllimport) void CountOfSpaces(char* str, int*count);
__declspec(dllimport) void CountOfSplitters(char* str, int*count);