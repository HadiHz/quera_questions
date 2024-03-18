input1 = input()
input2 = input()
n, a, b = input1.split(" ")
goals_times = input2.split(" ")
goals_times_temp = goals_times
goals_times = []
for i in goals_times_temp:
    goals_times = goals_times + [int(i)]
YES = 'YES'
NO = 'NO'
first_half_goals = []
second_half_goals = []
counter = 0
is_first = True
for goal in goals_times:
    if not is_first:
        second_half_goals += [goal]

    if counter + 1 < len(goals_times):
        if goals_times[counter] < goals_times[counter + 1] and is_first :
            is_first = True
            first_half_goals += [goal]
        elif goals_times[counter] > goals_times[counter + 1] and is_first:
            first_half_goals += [goal]
            is_first = False
    else:
        if is_first:
            first_half_goals += [goal]
        else:
            second_half_goals += [goal]
    counter += 1





print(first_half_goals)
print(second_half_goals)
'''
word = s
vowel_letters = ['a', 'e', 'i', 'o', 'u']
result = 1
for char in word:
    if char in vowel_letters:
        result = result * 2
        if goal <= 45 + a and is_frist:
       first_half_goals += 1
'''

print(n)
print(a)
print(b)
print(goals_times)
