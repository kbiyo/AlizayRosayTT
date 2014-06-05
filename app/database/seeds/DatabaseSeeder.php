<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->command->info("\n".'-----Demarrage du SEED !-----');
		
		DB::table('user_group')->delete();
		DB::table('group_right')->delete();

		DB::table('users')->delete();
		DB::table('groups')->delete();
		DB::table('rights')->delete();

		$this->command->info('Suppression des valeurs existante !');

		$user = User::create(
			array('firstname'=>'David', 
				'lastname'=>'Coquatrix', 
				'surname'=>'Kbiyo_Oh', 
				'email' => 'david.coquatrix@gmail.com',
				'photo' => '',
				'password' => Hash::make('azerty')
			)
		);

		$this->command->info('Creation des utilisateurs !');

		$group = Group::create(
			array(
				'title' => 'SuperAdministrateur',
				'description' => 'Groupe qui a tout les pouvoirs.'
			)
		);		

		$this->command->info('Creation des groupes !');

		$group->Users()->save($user);

		$this->command->info('Association des utilisateurs aux groupes !');

		$right= Right::create(array('category' => 'Global', 'value' => 'AccessAdminPanel', 'label' => 'Accèder au panneau d\'administration.'));
		$group->Rights()->save($right);

		$this->command->info('Ajout des droits globaux !');

		$rightShow= Right::create(array('category' => 'AdminUser', 'value' => 'List', 'label' => 'Lister les utilisateurs.'));
		$rightAdd= Right::create(array('category' => 'AdminUser', 'value' => 'Add', 'label' => 'Ajouter un utilisateur.'));
		$rightEdit= Right::create(array('category' => 'AdminUser', 'value' => 'Edit', 'label' => 'Editer un utilisateur.'));
		$rightDelete= Right::create(array('category' => 'AdminUser', 'value' => 'Delete', 'label' => 'Supprimer un utilisateur.'));
		$rightAttach= Right::create(array('category' => 'AdminUser', 'value' => 'AttachGroup', 'label' => 'Attacher un utilisateur à un groupe.'));
		$group->Rights()->save($rightShow);
		$group->Rights()->save($rightAdd);
		$group->Rights()->save($rightEdit);
		$group->Rights()->save($rightDelete);
		$group->Rights()->save($rightAttach);

		$this->command->info('Ajout des droits d\'administration pour les utilisateurs !');

		$rightShow= Right::create(array('category' => 'AdminGroup', 'value' => 'List', 'label' => 'Lister les groupes.'));
		$rightAdd= Right::create(array('category' => 'AdminGroup', 'value' => 'Add', 'label' => 'Ajouter un groupe.'));
		$rightEdit= Right::create(array('category' => 'AdminGroup', 'value' => 'Edit', 'label' => 'Editer un groupe.'));
		$rightDelete= Right::create(array('category' => 'AdminGroup', 'value' => 'Delete', 'label' => 'Supprimer un groupe.'));
		$rightAttach= Right::create(array('category' => 'AdminGroup', 'value' => 'AttachRight', 'label' => 'Attacher un groupe à un droit.'));
		$group->Rights()->save($rightShow);
		$group->Rights()->save($rightAdd);
		$group->Rights()->save($rightEdit);
		$group->Rights()->save($rightDelete);
		$group->Rights()->save($rightAttach);

		$this->command->info('Ajout des droits d\'administration pour les groupes !');

		$rightShow= Right::create(array('category' => 'AdminRight', 'value' => 'List', 'label' => 'Lister les droits.'));
		$rightAdd= Right::create(array('category' => 'AdminRight', 'value' => 'Add', 'label' => 'Ajouter un droit.'));
		$rightEdit= Right::create(array('category' => 'AdminRight', 'value' => 'Edit', 'label' => 'Editer un droit.'));
		$rightDelete= Right::create(array('category' => 'AdminRight', 'value' => 'Delete', 'label' => 'Supprimer un droit.'));
		$group->Rights()->save($rightShow);
		$group->Rights()->save($rightAdd);
		$group->Rights()->save($rightEdit);
		$group->Rights()->save($rightDelete);

		$this->command->info('Ajout des droits d\'administration pour les droits !');

		$rightShow= Right::create(array('category' => 'AdminNews', 'value' => 'List', 'label' => 'Lister les news.'));
		$rightAdd= Right::create(array('category' => 'AdminNews', 'value' => 'Add', 'label' => 'Ajouter une news.'));
		$rightEdit= Right::create(array('category' => 'AdminNews', 'value' => 'Edit', 'label' => 'Editer une news.'));
		$rightDelete= Right::create(array('category' => 'AdminNews', 'value' => 'Delete', 'label' => 'Supprimer une news.'));
		$group->Rights()->save($rightShow);
		$group->Rights()->save($rightAdd);
		$group->Rights()->save($rightEdit);
		$group->Rights()->save($rightDelete);

		$this->command->info('Ajout des droits d\'administration pour les news !');

		$rightShow= Right::create(array('category' => 'AdminComment', 'value' => 'List', 'label' => 'Lister les commentaires.'));
		$rightEdit= Right::create(array('category' => 'AdminComment', 'value' => 'Edit', 'label' => 'Editer un commentaire.'));
		$rightDelete= Right::create(array('category' => 'AdminComment', 'value' => 'Delete', 'label' => 'Supprimer une commentaire.'));
		$group->Rights()->save($rightShow);
		$group->Rights()->save($rightEdit);
		$group->Rights()->save($rightDelete);

		$this->command->info('Ajout des droits d\'administration pour les commentaires !');

		$this->command->info("\n" . '-----SEED TERMINE !-----');
	}

}