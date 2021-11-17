ENTRAINEUR (nom de la table)
idEntraineur (viens de utilisateur)
isPrincipal (valeur de la table entraineur (true ou false))
idEquipe (viens de equipe)
idNation (viens de nationalite)

CREATE TABLE 'entraineur' (
    'idEntraineur' int UNSIGNED NOT NULL,
    'isPrincipal' boolean DEFAULT false,
    'idEquipe' int UNSIGNED NOT NULL,
    'idNation' int UNSIGNED NOT NULL,
);

ALTER TABLE `entraineur`
    ADD PRIMARY KEY (`idEntraineur`),
    ADD CONSTRAINT `entraineur_id_foreign` FOREIGN KEY (`idEntraineur`) REFERENCES `utilisateur` (`idUtil`) ON DELETE CASCADE ON UPDATE CASCADE,


SELECT entraineur.idEntraineur, utilisateur.nomUtil, utilisateur.prenomUtil, nationalite.libNation
FROM utilisateur, entraineur, nationalite 
WHERE utilisateur.idUtil = entraineur.idEntraineur AND entraineur.idNation = nationalite.idNation