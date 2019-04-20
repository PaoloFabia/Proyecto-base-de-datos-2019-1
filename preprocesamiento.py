import csv


agencia_agenciaregion_tour = 'db_sin_procesar/agencia_agenciaregion_tour.csv'
hoteles_habitaciones = 'db_sin_procesar/hoteles_habitaciones.csv'
restaurante_platos = 'db_sin_procesar/restaurante_platos.csv'


def procesar_agencia():
    with open(agencia_agenciaregion_tour, 'r', encoding='utf-8') as file:
        file = csv.reader(file, delimiter=',')
        line_count = 0
        lines = []
        for line in file:
            if line_count != 0:
                lines.append(line)
                print(len(line))
            line_count += 1

    with open('agencias.csv', 'w') as agencias:
        agencias_w = csv.writer(agencias, delimiter =',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        agencias_w.writerow(['aid', 'rid', 'nombre', 'direccion', 'telefono'])
        for line in lines:
            agencias_w.writerow([line[3], line[4], line[0], line[1], line[2]])

    with open('tours.csv', 'w') as tours:
        tours_w = csv.writer(tours, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        tours_w.writerow(['tid', 'descripcion', 'precio'])
        for line in lines:
            tours_w.writerow([line[5], line[6], line[7]])

    with open('tour_agencia.csv', 'w') as tour_agencia:
        tour_agencia_w = csv.writer(tour_agencia, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        tour_agencia_w.writerow(['aid', 'tid'])
        for line in lines:
            tour_agencia_w.writerow([line[3], line[5]])


def procesar_hoteles():
    with open(hoteles_habitaciones, 'r') as file:
        file = csv.reader(file, delimiter=',')
        line_count = 0
        lines = []
        for line in file:
            if line_count != 0:
                lines.append(line)
            line_count += 1

    with open('hoteles.csv', 'w') as hoteles:
        hoteles_w = csv.writer(hoteles, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        hoteles_w.writerow(['hid', 'rid', 'nombre', 'direccion', 'telefono', 'descripcion', 'estrellas'])
        for line in lines:
            hoteles_w.writerow([line[6], line[5], line[0], line[1], line[2], line[3], line[4]])

    with open('habitaciones.csv', 'w') as habitaciones:
        habitaciones_w = csv.writer(habitaciones, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        habitaciones_w.writerow(['habid', 'hid', 'nombre', 'precio'])
        for line in lines:
            habitaciones_w.writerow([line[7], line[6], line[8], line[9]])


def procesar_restaurantes():
    with open(restaurante_platos, 'r') as file:
        file = csv.reader(file, delimiter=',')
        line_count = 0
        lines = []
        for line in file:
            if line_count != 0:
                lines.append(line)
            line_count += 1

    with open('restaurantes.csv', 'w') as restaurantes:
        restaurantes_w = csv.writer(restaurantes, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        restaurantes_w.writerow(['restid', 'rid', 'nombre', 'direccion', 'telefono', 'descripcion'])
        for line in lines:
            restaurantes_w.writerow([line[0], line[5], line[1], line[2], line[3], line[4]])

    with open('platos.csv', 'w') as platos:
        platos_w = csv.writer(platos, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)
        platos_w.writerow(['pid', 'restid', 'nombre', 'descripcion', 'precio'])
        for line in lines:
            platos_w.writerow([line[6], line[0], line[7], line[8], line[9]])


procesar_agencia()
procesar_hoteles()
procesar_restaurantes()
