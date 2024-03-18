from collections import Counter

# Array with pairs and non-pairs
n = int(input())
numbers = input()

diArray = numbers.split(" ")
diArrayNum = []
for i in diArray:
    diArrayNum.append(int(i))

# Count the frequency of each element in the array
frequency = Counter(diArrayNum)

# Filter the elements that appear an odd number of times
non_paired_elements = [item for item in frequency if frequency[item] % 2 != 0]


for i in range(len(non_paired_elements)):
    if i % 2 != 0:
        non_paired_elements[i] = -1 * non_paired_elements[-1]

distance = abs(sum(non_paired_elements))

print(distance)

