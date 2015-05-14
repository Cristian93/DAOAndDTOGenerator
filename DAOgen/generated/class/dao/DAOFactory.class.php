<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return ActorDAO
	 */
	public static function getActorDAO(){
		return new ActorMySqlExtDAO();
	}

	/**
	 * @return AddressDAO
	 */
	public static function getAddressDAO(){
		return new AddressMySqlExtDAO();
	}

	/**
	 * @return CategoryDAO
	 */
	public static function getCategoryDAO(){
		return new CategoryMySqlExtDAO();
	}

	/**
	 * @return CityDAO
	 */
	public static function getCityDAO(){
		return new CityMySqlExtDAO();
	}

	/**
	 * @return CountryDAO
	 */
	public static function getCountryDAO(){
		return new CountryMySqlExtDAO();
	}

	/**
	 * @return CustomerDAO
	 */
	public static function getCustomerDAO(){
		return new CustomerMySqlExtDAO();
	}

	/**
	 * @return FilmDAO
	 */
	public static function getFilmDAO(){
		return new FilmMySqlExtDAO();
	}

	/**
	 * @return FilmActorDAO
	 */
	public static function getFilmActorDAO(){
		return new FilmActorMySqlExtDAO();
	}

	/**
	 * @return FilmCategoryDAO
	 */
	public static function getFilmCategoryDAO(){
		return new FilmCategoryMySqlExtDAO();
	}

	/**
	 * @return FilmTextDAO
	 */
	public static function getFilmTextDAO(){
		return new FilmTextMySqlExtDAO();
	}

	/**
	 * @return InventoryDAO
	 */
	public static function getInventoryDAO(){
		return new InventoryMySqlExtDAO();
	}

	/**
	 * @return LanguageDAO
	 */
	public static function getLanguageDAO(){
		return new LanguageMySqlExtDAO();
	}

	/**
	 * @return PaymentDAO
	 */
	public static function getPaymentDAO(){
		return new PaymentMySqlExtDAO();
	}

	/**
	 * @return RentalDAO
	 */
	public static function getRentalDAO(){
		return new RentalMySqlExtDAO();
	}

	/**
	 * @return StaffDAO
	 */
	public static function getStaffDAO(){
		return new StaffMySqlExtDAO();
	}

	/**
	 * @return StoreDAO
	 */
	public static function getStoreDAO(){
		return new StoreMySqlExtDAO();
	}


}
?>