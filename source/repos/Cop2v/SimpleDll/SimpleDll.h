#pragma once
using namespace std;
__declspec(dllexport) void CountLetters(char* str, int* count);
__declspec(dllexport) void CountWords(char* str, int* count);
__declspec(dllexport) void CountSentences(char* str, int*count);
__declspec(dllexport) void CountOfSpaces(char* str, int*count);
__declspec(dllexport) void CountOfSplitters(char* str, int*count);