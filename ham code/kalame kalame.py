s = input()
word = s
vowel_letters = ['a', 'e', 'i', 'o', 'u']
result = 1
for char in word:
    if char in vowel_letters:
        result = result * 2


print(result)
