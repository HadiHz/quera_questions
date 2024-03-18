'''

numScenario = int(input())

def checkCouples(couples):
    flag = 0
    for i in range(len(couples) - 1):
        if i != 0:
            if couples[i] != couples[i + 1] and couples[i] != couples[i-1]:
                #print(couples[i] , couples[i + 1])
                flag = flag + 1
        else:
            if couples[i] != couples[i + 1]:
                #print(couples[i] , couples[i + 1])
                flag = flag + 1
        
    if flag == 1 or flag == 0:
        return "YES"
    elif len(couples) == 4:
        return "YES"
    else:
        return "NO"
    
def preprocess(couples):
    deleteIndexes = []
    for i in range(len(couples) -1):
        if couples[i] == couples[i +1]:
            deleteIndexes = deleteIndexes + [i]
            deleteIndexes = deleteIndexes + [i + 1]
    deleteIndexes.sort(reverse=True)
    for j in deleteIndexes:
        couples.pop(j)
    return couples

results = []
for i in range(numScenario):
    numOfCouples = int(input())
    inputCouples = input()
    couplesWithoutMW = inputCouples.replace('M','').replace('W', '').split(" ")
    couplesWithoutMW = preprocess(couplesWithoutMW)
    results = results + [checkCouples(couplesWithoutMW)]

for r in results:
    print(r)


'''

def can_swap_seats(t, scenarios):
    for _ in range(t):
        n = int(scenarios[_][0])
        seats = scenarios[_][1]

        # بررسی تعداد زنان و مردان در جایگاه‌های اولیه
        count_women = seats.count('W')
        count_men = seats.count('M')
        if count_women != count_men:
            print("NO")
            continue

        # بررسی جفت‌های همسری
        i = 0
        while i < 2 * n - 1:
            wife = seats[i]
            husband = 'M' + seats[i][1]

            j = i + 1
            while j < 2 * n:
                if seats[j] == husband and seats[seats.index(husband)] == wife:
                    break
                j += 1
            else:
                print("NO")
                break

            i += 2
        else:
            # بررسی وضعیت بین جفت‌ها
            for i in range(0, 2 * n - 2, 2):
                if seats[i] == seats[i + 2]:
                    print("YES")
                    break
            else:
                print("NO")


# خواندن ورودی و فراخوانی تابع
t = int(input())
scenarios = []
for _ in range(t):
    n = int(input())
    seats = input()
    scenarios.append((n, seats))
can_swap_seats(t, scenarios)

    


    
