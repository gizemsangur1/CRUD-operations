/*CREATING TABLE */

CREATE TABLE notes (
    id SERIAL NOT NULL,
    note CHARACTER VARYING,
    n_date date,
)

/*CREATING PROCEDURE FOR ADDING NOTE*/
 CREATE OR REPLACE PROCEDURE create_note(n_note CHARACTER VARYING)
    AS
    $$
BEGIN
    INSERT INTO notes(note,n_date) VALUES (n_note,current_date);
END;
    $$
LANGUAGE plpgsql;

/*CREATING PROCEDURE FOR DELETING NOTE*/

CREATE OR REPLACE PROCEDURE delete_note(n_id)
    AS
    $$
BEGIN
	DELETE FROM notes WHERE (n_id=id);
END;
    $$
LANGUAGE plpgsql;

/*CREATING PROCEDURE FOR UPDATING NOTE*/

CREATE OR REPLACE PROCEDURE update_note(n_note,n_id)
    AS
    $$
BEGIN
    UPDATE notes SET note=n_note WHERE notes.id=n_id;
END;
    $$