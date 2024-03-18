import math

def calculator(n, m, li):
    a = m_group(li, m)
    b = sum_of_sublists(a)
    c = chess_calc(b)
    return c

def m_group(given_list, m):
    result = []
    index = 1
    index2 = 0
    number_of_groups = math.ceil(len(given_list) / float(m))
    result = [[] for i in range(number_of_groups)]
    for element in given_list:
        if index % m == 0:
            result[index2].append( element)
            index2 += 1
        else:
            result[index2].append( element)
        index += 1
    return result
    
def sum_of_sublists(given_list):
    result = []
    for li in given_list:
        result.append(sum(li))
    return result


def chess_calc(given_list):
    result = 0
    index = 0
    for el in given_list:
        if index % 2 == 0:
            result = result + el
        else:
            result = result - el
        index = index + 1
    return result

