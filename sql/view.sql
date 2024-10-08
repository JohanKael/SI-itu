CREATE OR REPLACE VIEW  v_users
AS
SELECT 
    u.id AS id_user,
    u.email_user,
    u.password_user,
    u.id_departement,
    d.nom_departement
FROM
    users u
JOIN 
    departements d ON u.id_departement=d.id;