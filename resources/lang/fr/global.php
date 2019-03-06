<?php

return [
		'user-management' => [		'title' => 'User management',		'fields' => [		],	],
		'permissions' => [		'title' => 'Permissions',		'fields' => [			'title' => 'Title',		],	],
		'roles' => [		'title' => 'Roles',		'fields' => [			'title' => 'Title',			'permission' => 'Permissions',		],	],
		'users' => [		'title' => 'Users',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'password' => 'Password',			'role' => 'Role',			'remember-token' => 'Remember token',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Time',		'fields' => [		],	],
		'time-management' => [		'title' => 'Time management',		'fields' => [		],	],
		'time-work-types' => [		'title' => 'Work types',		'fields' => [		],	],
		'time-projects' => [		'title' => 'Projects',		'fields' => [		],	],
		'time-entries' => [		'title' => 'Time entries',		'fields' => [		],	],
		'time-reports' => [		'title' => 'Reports',		'fields' => [		],	],
		'expense-management' => [		'title' => 'Expense Management',		'fields' => [		],	],
		'expense-category' => [		'title' => 'Expense Categories',		'fields' => [			'name' => 'Name',		],	],
		'income-category' => [		'title' => 'Income categories',		'fields' => [		],	],
		'income' => [		'title' => 'Income',		'fields' => [		],	],
		'expense' => [		'title' => 'Expenses',		'fields' => [		],	],
		'monthly-report' => [		'title' => 'Monthly report',		'fields' => [		],	],
		'contact-management' => [		'title' => 'Contact management',		'fields' => [		],	],
		'contact-companies' => [		'title' => 'Companies',		'fields' => [		],	],
		'contacts' => [		'title' => 'Contacts',		'fields' => [		],	],
		'client-management' => [		'title' => 'Client management',		'fields' => [		],	],
		'client-management-settings' => [		'title' => 'Client management settings',		'fields' => [		],	],
		'client-currencies' => [		'title' => 'Currencies',		'fields' => [		],	],
		'client-transaction-types' => [		'title' => 'Transaction types',		'fields' => [		],	],
		'client-income-sources' => [		'title' => 'Income sources',		'fields' => [		],	],
		'client-statuses' => [		'title' => 'Client statuses',		'fields' => [		],	],
		'client-project-statuses' => [		'title' => 'Project statuses',		'fields' => [		],	],
		'clients' => [		'title' => 'Clients',		'fields' => [		],	],
		'client-projects' => [		'title' => 'Projects',		'fields' => [		],	],
		'client-notes' => [		'title' => 'Notes',		'fields' => [		],	],
		'client-documents' => [		'title' => 'Documents',		'fields' => [		],	],
		'client-transactions' => [		'title' => 'Transactions',		'fields' => [		],	],
		'client-reports' => [		'title' => 'Reports',		'fields' => [		],	],
		'task-management' => [		'title' => 'Task management',		'fields' => [		],	],
		'task-statuses' => [		'title' => 'Statuses',		'fields' => [		],	],
		'task-tags' => [		'title' => 'Tags',		'fields' => [		],	],
		'tasks' => [		'title' => 'Tasks',		'fields' => [		],	],
		'task-calendar' => [		'title' => 'Calendar',		'fields' => [		],	],
		'faq-management' => [		'title' => 'FAQ Management',		'fields' => [		],	],
		'faq-categories' => [		'title' => 'Categories',		'fields' => [			'title' => 'Category',		],	],
		'faq-questions' => [		'title' => 'Questions',		'fields' => [			'category' => 'Category',			'question-text' => 'Question',			'answer-text' => 'Answer',		],	],
		'content-management' => [		'title' => 'Content management',		'fields' => [		],	],
		'content-categories' => [		'title' => 'Categories',		'fields' => [		],	],
		'content-tags' => [		'title' => 'Tags',		'fields' => [		],	],
		'content-pages' => [		'title' => 'Pages',		'fields' => [		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [		],	],
		'basic-crm' => [		'title' => 'Basic CRM',		'fields' => [		],	],
		'crm-statuses' => [		'title' => 'Statuses',		'fields' => [		],	],
		'crm-customers' => [		'title' => 'Customers',		'fields' => [		],	],
		'crm-notes' => [		'title' => 'Notes',		'fields' => [		],	],
		'crm-documents' => [		'title' => 'Documents',		'fields' => [		],	],
		'invoice-management' => [		'title' => 'Expense management',		'fields' => [		],	],
		'invoices' => [		'title' => 'Invoices',		'fields' => [		],	],
		'statuses' => [		'title' => 'Statuses',		'fields' => [			'name' => 'Name',		],	],
		'messages' => [		'title' => 'Messages',		'fields' => [			'name' => 'Name',			'email' => 'Email',			'phone' => 'Phone',			'message' => 'Message',		],	],
		'meetings' => [		'title' => 'Meetings',		'fields' => [			'name' => 'Name',			'city' => 'City',			'start-date' => 'Start date',			'end-date' => 'End date',			'project' => 'Project',			'status' => 'Status',		],	],
		'budgets' => [		'title' => 'Budgets',		'fields' => [			'amount' => 'Amount',			'projects' => 'Projects',			'category' => 'Category',			'year' => 'Year',		],	],
		'providers' => [		'title' => 'Providers',		'fields' => [			'name' => 'Name',			'address' => 'Address',			'postal-code' => 'Postal code',			'city' => 'City',			'country' => 'Country',			'phone' => 'Phone',			'contact-person' => 'Contact person',			'email' => 'Email',		],	],
		'categories' => [		'title' => 'Categories',		'fields' => [			'name' => 'Name',		],	],
		'contingencies' => [		'title' => 'Contingencies',		'fields' => [			'name' => 'Name',		],	],
		'expense-types' => [		'title' => 'Expense types',		'fields' => [			'name' => 'Name',		],	],
		'service-types' => [		'title' => 'Service types',		'fields' => [			'name' => 'Name',		],	],
		'years' => [		'title' => 'Years',		'fields' => [			'name' => 'Name',		],	],
		'projects' => [		'title' => 'Projects',		'fields' => [			'name' => 'Name',			'start-date' => 'Start date',			'end-date' => 'End date',			'logo' => 'Logo',			'status' => 'Status',		],	],
		'expenses' => [		'title' => 'Expenses',		'fields' => [			'user' => 'Requester',			'project' => 'Project',			'expense-type' => 'Expense type',			'meeting' => 'Meeting',			'contingency' => 'Contingency',			'date' => 'Date',			'due-date' => 'Due date',			'invoice-subtotal' => 'Invoice subtotal',			'invoice-taxes' => 'Invoice taxes',			'invoice-total' => 'Invoice total',			'budget-subtotal' => 'Budget subtotal',			'budget-taxes' => 'Budget taxes',			'budget-total' => 'Budget total',			'provider' => 'Provider',			'service-type' => 'Service type',			'service' => 'Service',			'selection-criteria' => 'Selection criteria',			'pm' => 'PM',			'pm-approval-date' => 'PM approval date',			'finance' => 'Finance resposible',			'finance-approval-date' => 'Finance approval date',			'files' => 'Files',			'created-by' => 'Created by',		],	],
		'internal-notifications' => [		'title' => 'Notifications',		'fields' => [			'text' => 'Text',			'link' => 'Link',			'users' => 'Users',		],	],
		'user-actions' => [		'title' => 'User actions',		'created_at' => 'Time',		'fields' => [			'user' => 'User',			'action' => 'Action',			'action-model' => 'Action model',			'action-id' => 'Action id',		],	],
	'app_create' => 'Créer',
	'app_save' => 'Enregistrer',
	'app_edit' => 'Modifier',
	'app_restore' => 'Restaurer',
	'app_permadel' => 'Supprimer définitivement',
	'app_all' => 'Tous',
	'app_trash' => 'Corbeille',
	'app_view' => 'Afficher',
	'app_update' => 'Mettre à jour',
	'app_list' => 'Lister',
	'app_logout' => 'Déconnexion',
	'app_add_new' => 'Ajouter',
	'app_are_you_sure' => 'Êtes-vous sûr ?',
	'app_back_to_list' => 'Retour à la liste',
	'app_dashboard' => 'Tableau de bord',
	'app_delete' => 'Supprimer',
	'app_delete_selected' => 'Supprimer les éléments sélectionnés',
	'app_category' => 'Catégorie',
	'app_categories' => 'Catégories',
	'app_please_select' => 'Sélectionner',
	'app_crud_event_field' => 'Champ de l\'étiquette d\'événement',
	'app_create_new_calendar_source' => 'Créer une nouvelle source de calendrier',
	'app_edit_calendar_source' => 'Modifier la source du calendrier',
	'app_client_management' => 'Gestion des clients',
	'app_client_management_settings' => 'Paramètres de gestion du client',
	'app_country' => 'Pays',
	'app_client_status' => 'Statut du client',
	'app_clients' => 'Clients',
	'app_client_statuses' => 'Statut des clients',
	'app_currencies' => 'Devises',
	'app_main_currency' => 'Devise principale',
	'app_documents' => 'Documents',
	'app_file' => 'Fichier',
	'app_income_source' => 'Source de revenu',
	'app_income_sources' => 'Sources de revenu',
	'app_fee_percent' => 'Pourcentage de frais',
	'app_note_text' => 'Note',
	'app_client' => 'Client',
	'app_start_date' => 'Date de début',
	'app_budget' => 'Budget',
	'app_project_status' => 'L\'état du projet',
	'app_project_statuses' => 'Statut du projet',
	'app_transactions' => 'Transactions',
	'app_transaction_types' => 'Types de transactions',
	'app_transaction_type' => 'Type de transaction',
	'app_transaction_date' => 'Date de la transaction',
	'app_currency' => 'Devise',
	'app_current_password' => 'Mot de passe actuel',
	'app_new_password' => 'Nouveau mot de passe',
	'app_password_confirm' => 'Confirmation du nouveau mot de passe',
	'app_dashboard_text' => 'Vous êtes authentifié !',
	'app_forgot_password' => 'Mot de passe oublié ?',
	'app_remember_me' => 'Se souvenir de moi',
	'app_login' => 'Connexion',
	'app_change_password' => 'Changer le mot de passe',
	'app_print' => 'Imprimer',
	'app_copy' => 'Copier',
	'app_colvis' => 'Visibilité de la colonne',
	'app_reset_password' => 'Réinitialiser le mot de passe',
	'app_reset_password_woops' => '<strong>Oups !</strong> Il y a eu des problèmes d\'entrée :',
	'app_email_line1' => 'Vous recevez ce courrier électronique parce que nous avons reçu une demande de réinitialisation de mot de passe pour votre compte.',
	'app_email_line2' => 'Si vous n\'avez pas demandé de réinitialisation d\'un mot de passe, aucune autre action n\'est requise.',
	'app_email_greet' => 'Bonjour',
	'app_email_regards' => 'Cordialement',
	'app_confirm_password' => 'Confirmez le mot de passe',
	'app_if_you_are_having_trouble' => 'Si vous rencontrez des problèmes, cliquez sur',
	'app_copy_paste_url_bellow' => 'bouton, copiez et collez l\'URL ci-dessous dans votre navigateur Web:',
	'app_register' => 'S\'inscrire',
	'app_registration' => 'Enregistrement',
	'app_not_approved_title' => 'Vous n\'êtes pas approuvé',
	'app_not_approved_p' => 'Votre compte n\'est toujours pas approuvé par l\'administrateur. Veuillez patienter et réessayer plus tard.',
	'app_questions' => 'Questions',
	'app_question' => 'Question',
	'app_answer' => 'Réponse',
	'app_sample_question' => 'Exemple de question',
	'app_sample_answer' => 'Exemple de réponse',
	'app_password' => 'Mot de passe',
	'app_remember_token' => 'Se souvenir du jeton',
	'app_permissions' => 'Autorisations',
	'app_user_actions' => 'Actions de l\'utilisateur',
	'app_action' => 'Action',
	'app_time' => 'Heure',
	'app_description' => 'Déscription',
	'app_valid_from' => 'Validation à partir de ',
	'app_discount_amount' => 'Montant de l\'abonnement',
	'app_discount_percent' => '% De réduction',
	'app_coupons_amount' => 'Montant des coupons',
	'app_coupons' => 'Coupons',
	'app_redeem_time' => 'Échangez le temps',
	'app_coupon_management' => 'Gestion des coupons',
	'app_time_management' => 'Gestion du temps',
	'app_projects' => 'Projet',
	'app_reports' => 'Rapports',
	'app_time_entries' => 'Entrées de l\'heure',
	'app_work_type' => 'Type de travail',
	'app_work_types' => 'Types de travail',
	'app_project' => 'Projet',
	'app_start_time' => 'Heure de début',
	'app_end_time' => 'Heure de fin',
	'app_expense_category' => 'Catégorie de dépenses',
	'app_expense_categories' => 'Catégories de dépenses',
	'app_expense_management' => 'Gestion des dépenses',
	'app_expenses' => 'Dépenses',
	'app_expense' => 'Dépense',
	'app_entry_date' => 'Date d\'entrée',
	'app_amount' => 'Montant',
	'app_income_categories' => 'Catégories de revenu',
	'app_monthly_report' => 'Rapport mensuel',
	'app_companies' => 'Organisme',
	'app_company_name' => 'Nom de l\'organisme',
	'app_address' => 'Addresse',
	'app_website' => 'Site web',
	'app_contact_management' => 'Gestion des contacts',
	'app_contacts' => 'Contacts',
	'app_company' => 'Organisme',
	'app_first_name' => 'Prénom',
	'app_last_name' => 'Nom',
	'app_phone' => 'Téléphone',
	'app_category_name' => 'Nom de la catégorie',
	'app_product_management' => 'Gestion des produits',
	'app_products' => 'Produits',
	'app_product_name' => 'Désignation du produit',
	'app_price' => 'Prix',
	'app_calendar' => 'Calendrier',
	'app_statuses' => 'Statut',
	'app_task_management' => 'Gestion des tâches',
	'app_tasks' => 'Tâches',
	'app_status' => 'Statut',
	'app_attachment' => 'Pièce jointe',
	'app_due_date' => 'Date d\'échéance',
	'app_assigned_to' => 'Assigné à',
	'app_assets' => 'Les atouts',
	'app_asset' => 'Atout',
	'app_serial_number' => 'Numéro de série',
	'app_assigned_user' => 'Affecté (utilisateur)',
	'app_assets_history' => 'Historique des actifs',
	'app_assets_management' => 'Gestion d\'actifs',
	'app_slug' => 'Slug',
	'app_content_management' => 'Gestion de contenu',
	'app_text' => 'Texte',
	'app_excerpt' => 'Extrait',
	'app_featured_image' => 'Image à la une',
	'app_axis' => 'Axe',
	'app_show' => 'Afficher',
	'app_group_by' => 'Grouper par',
	'app_chart_type' => 'Type de graphique',
	'app_create_new_report' => 'Créer un nouveau rapport',
	'app_select_dt_placeholder' => 'Sélectionnez un des champs date / heure',
	'app_aggregate_function_use' => 'Fonction agrégée à utiliser',
	'app_change_notifications_field_1_label' => 'Envoyer une notification par courrier électronique à l\'utilisateur',
	'app_select_users_placeholder' => 'Sélectionnez un de vos Utilisateurs',
	'app_is_created' => 'est créé',
	'app_is_updated' => 'est mis à jour',
	'app_is_deleted' => 'est supprimé',
	'app_notifications' => 'Notifications',
	'app_notify_user' => 'Notifier l\'utilisateur',
	'app_create_new_notification' => 'Créer une nouvelle notification',
	'app_stripe_transactions' => 'Transactions de rayures',
	'app_upgrade_to_premium' => 'Passer à la version premium',
	'app_messages' => 'Messages',
	'app_you_have_no_messages' => 'Vous n\'avez pas de messages.',
	'app_all_messages' => 'Tous les messages',
	'app_new_message' => 'Nouveau message',
	'app_outbox' => 'Boîte d\'envoi',
	'app_inbox' => 'Boîte de réception',
	'app_recipient' => 'Destinataire',
	'app_message' => 'Message',
	'app_send' => 'Envoyer',
	'app_reply' => 'Répondre',
	'app_calendar_sources' => 'Sources de calendrier',
	'app_new_calendar_source' => 'Créer une nouvelle source de calendrier',
	'app_crud_title' => 'Titre de Crud',
	'app_crud_date_field' => 'Champ de dates de Crud',
	'app_prefix' => 'Préfixe',
	'app_label_field' => 'Champ d\'étiquette',
	'app_suffix' => 'Suffixe',
	'app_no_calendar_sources' => 'Il n\'y a pas encore de sources de calendrier.',
	'app_no_entries_in_table' => 'Aucun enregistrement',
	'app_faq_management' => 'Gestion des questions',
	'app_administrator_can_create_other_users' => 'Administrateur',
	'app_simple_user' => 'Utilisateur',
	'app_title' => 'Titre',
	'app_roles' => 'Rôles',
	'app_role' => 'Rôle',
	'app_user_management' => 'Gestion des Utilisateurs',
	'app_users' => 'Utilisateurs',
	'app_user' => 'Utilisateur',
	'app_name' => 'Nom',
	'app_email' => 'eMail',
	'app_valid_to' => 'Valide jusqu\'à',
	'app_phone1' => 'Téléphone 1',
	'app_tags' => 'Tags',
	'app_tag' => 'Tag',
	'app_when_crud' => 'Sur modification',
	'app_phone2' => 'Téléphone 2',
	'app_location' => 'Localisation',
	'app_locations' => 'Localisations',
	'app_created_at' => 'Créer à',
	'app_updated_at' => 'Modifier à ',
	'app_deleted_at' => 'Supprimer à',
	'app_subject' => 'Sujet',
	'app_imported_rows_to_table' => ':rows lignes importées dans la table :table',
	'app_pages' => 'Pages',
	'app_csv' => 'CSV',
	'app_excel' => 'Excel',
	'app_pdf' => 'PDF',
	'app_import_data' => 'Importer les données ',
	'app_action_model' => 'Modèle de l\'action',
	'app_action_id' => 'ID de l\'action',
	'app_campaign' => 'Campagne',
	'app_campaigns' => 'Campagnes',
	'app_code' => 'Code',
	'app_skype' => 'Skype',
	'app_photo' => 'Photo (max 8Mo)',
	'app_photo1' => 'Photo 1',
	'app_photo2' => 'Photo 2',
	'app_photo3' => 'Photo 3',
	'app_notes' => 'Notes',
	'app_no_reports_yet' => 'Il n\'y a pas de rapport.',
	'app_whoops' => 'Oups !',
	'app_file_contains_header_row' => 'Le fichier contient t-il une ligne d\'entêtes.',
	'app_csvImport' => 'Importer CSV.',
	'app_csv_file_to_import' => 'Fichier CSV à importer.',
	'app_parse_csv' => 'Analyser CSV.',
	'app_there_were_problems_with_input' => 'Il y a eu un problème avec cette entrée',
	'app_subscription-billing' => 'Abonnements',
	'app_subscription-payments' => 'Paiements',
	'app_basic_crm' => 'CRM de base',
	'app_customers' => 'Clients',
	'app_customer' => 'Client',
	'app_custom_controller_index' => 'Index du contrôleur personnalisé.',
	'app_sample_category' => 'Exemple de catégorie',
	'app_reports_x_axis_field' => 'Axe X - veuillez choisir un des champs date / heure',
	'app_reports_y_axis_field' => 'Axe Y - veuillez choisir l\'un des champs numériques',
	'app_select_crud_placeholder' => 'Veuillez sélectionner l\'un de vos CRUD',
	'app_x_axis_group_by' => 'Axe X groupé par',
	'app_x_axis_field' => 'Champ de l\'axe X (date / heure)',
	'app_y_axis_field' => 'Champ de l\'axe Y',
	'app_integer_float_placeholder' => 'Veuillez sélectionner l\'un des champs entier/flottant',
	'app_select_all' => 'Sélectionner tous',
	'app_deselect_all' => 'Supprimer tous',
	'app_team-management' => 'Equipes',
	'app_team-management-singular' => 'Equipe',
	'global_title' => 'synapse intranet 3.3',
];