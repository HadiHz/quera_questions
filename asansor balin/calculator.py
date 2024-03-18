def calculate_floor(string):
    floor = 0
    for command in string:
        if command == "U":
            floor += 1
        else: # D
            floor -= 1
    return floor
