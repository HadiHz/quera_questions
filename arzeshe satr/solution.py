def csv_reader(path):
    with open(path) as csv:
        for row in csv.readlines():
            
            yield row.rstrip().split(',')

def process(path):
    pass
