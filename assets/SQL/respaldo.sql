CREATE OR REPLACE FUNCTION Historial() RETURNS TRIGGER AS $historal_jugadores$
   BEGIN
      INSERT INTO historial(id_jugador, puntuacion, npartidas) VALUES ((select id_jugador from jugadores order by id_jugador desc limit 1), 0, 1);
      RETURN NEW;
   END;
$historal_jugadores$ LANGUAGE plpgsql;

CREATE TRIGGER historial_trigger AFTER INSERT ON jugadores
FOR EACH ROW EXECUTE PROCEDURE Historial();